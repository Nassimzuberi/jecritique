<?php
namespace app\php\factory;

use Nassim\Php\Factory;

class ActionFactory extends Factory{

    protected $class_name = 'action';

    public function like($iduser,$idaction,$objet){

        $fac = '\app\php\factory\\'. ucfirst($objet).'Factory';
        $factory = new $fac();
        $pdo = $this->getDb();
        $req = $pdo->query("SELECT * FROM action where idAction = {$idaction} AND libAction = 'like' AND  libObjet = '{$objet}' AND idUser = {$iduser} ");
        $res =$req->fetch();
        if($res){
            $this->delete($res['id']);
            $factory->unlike($idaction);
            return $res;

        }
        else{
            $this->create([
                'idUser' => $iduser,
                'idAction' => $idaction,
                'libAction' => 'like',
                'libObjet' => $objet
            ]);
            $factory->like($idaction);
            return false;
        }

    }

    public function dislike($iduser,$idaction, $objet){
        $fac = '\app\php\factory\\'. ucfirst($objet).'Factory';
        $factory = new $fac();
        $pdo = $this->getDb();
        $req = $pdo->query("SELECT * FROM action where idAction = {$idaction} AND libAction = 'dislike' AND libObjet = '{$objet}' AND idUser = {$iduser} ");
        $res =$req->fetch();
        if($res){
            $this->delete($res['id']);
            $factory->undislike($idaction);
            return  $res;
        }
        else {
            $this->create([
                'idUser' => $iduser,
                'idAction' => $idaction,
                'libAction' => 'dislike',
                'libObjet' => $objet
            ]);
            $factory->dislike($idaction);
            return false;
        }
    }

}