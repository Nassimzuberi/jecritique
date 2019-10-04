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
        $champ = '';
        $ky = '';
        $keys = array_keys($donnees);
        $last_key = end($keys);
        foreach ($donnees as $k => $val) {
            if ($k === $last_key) {
                $champ .= $k;
                $ky .= ':'. $k;
            } else {
                $champ .= $k . ' , ';
                $ky .= ':'.$k.' , ';
            }

        }
        $query = $requete . "(" . $champ . ") values (" . $ky . ") ";
        $data = $pdo->prepare($query);
        $res = $data->execute($donnees);
        return $res;

    }

    public function find($id){
        $pdo = $this->getDb();
        $req = $pdo->query("SELECT * FROM {$this->class_name} WHERE id = {$id}");
        $data = $req->fetch();
        return $data;
    }

    public function all(){
        $pdo = $this->getDb();
        $req = $pdo->query("SELECT * FROM {$this->class_name}");
        $data = $req->fetchAll();
        return $data;

    }

    public function getDb(){
        if(is_null($this->db)){
            $db = new DbTools();
            $this->db = $db->connectDb();
        }

        return $this->db;

    }

}