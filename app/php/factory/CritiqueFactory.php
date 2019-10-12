<?php

namespace app\php\factory;


use Nassim\Php\Factory;
use Nassim\Php\Traits\Likeable;

class CritiqueFactory extends Factory
{
    use Likeable;
    protected $class_name = 'critique';


    public function NbComment($id){
        $pdo = $this->getDb();
        $req = $pdo->query("SELECT count(*) FROM comment WHERE idCritique = {$id} ");
        $data = $req->fetch();
        return $data[0];
    }
    public function showCommentByCritique($id){
        $pdo = $this->getDb();
        $req = $pdo->query("SELECT * FROM comment LEFT JOIN user on user.id = comment.idUser WHERE idCritique = {$id}");
        $data = $req->fetchAll();
        return $data;
    }


    public function find($id){
        $pdo = $this->getDb();
        $req = $pdo->query("SELECT * FROM critique LEFT JOIN user ON user.id = critique.idUser WHERE critique.id = {$id} ");
        $data = $req->fetch();
        return $data;
    }


}