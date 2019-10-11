<?php
namespace app\php\factory;

use Nassim\Php\Factory;

class ActionFactory extends Factory{

    protected $class_name = 'action';

    public function likePost($iduser,$idaction,$objet){
        $pdo = $this->getDb();
        $req = $pdo->query("SELECT * FROM action where idAction = {$idaction} AND libAction = 'like' AND  libObjet = '{$objet}' AND idUser = {$iduser} ");
        if($req){
            return $req->fetch();
        }
        $this->create([
            'idUser' => $iduser,
            'idAction' => $idaction,
            'libaction' => 'like',
            'libObjet' => $objet
        ]);
        return false;
    }

    public function dislikePost($iduser,$idaction, $objet){
        $pdo = $this->getDb();
        $req = $pdo->query("SELECT * FROM action where idaction = {$idaction} AND libAction = 'dislike' AND libObjet = '{$objet}' AND idUser = {$iduser} ");

        if($req){
            return  $req->fetch();
        }
        $this->create([
            'idUser' => $iduser,
            'idAction' => $idaction,
            'libaction' => 'dislike',
            'libObjet' => $objet
        ]);
        return false;
    }

}