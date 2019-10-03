<?php


namespace Nassim\Php;

use app\php\factory\DbTools;

class Factory{

    protected $class_name;
    protected $db;

    public function create(array $donnees)
    {
        $user = new \app\php\model\Category($donnees);
        $pdo = $this->getDb();
        $requete = "INSERT INTO {$this->class_name} ";
        var_dump($requete);
        $champ = '';
        $ky = '';
        $keys = array_keys($donnees);
        $last_key = end($keys);
        foreach ($donnees as $k => $val) {
            if ($k === $last_key) {
                $champ .= $k;
                $ky .= $k . ' = ? ';
            } else {
                $champ .= $k . ' , ';
                $ky .= $k . ' = ? , ';
            }

        }

        $query = $requete . "(" . $champ . ") values (" . $ky . ") ";
        $data = $pdo->prepare($query);
        $res = $data->execute($donnees);
        return $res;

    }

    public function getDb(){
        if(is_null($this->db)){
            $db = new DbTools();
            $this->db = $db->connectDb();
        }

        return $this->db;

    }

}