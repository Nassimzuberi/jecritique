<?php
namespace app\php\factory;

use Nassim\Php\Factory;
use Nassim\Php\Traits\Likeable;

class PostFactory extends Factory
{
    use Likeable;
    protected $class_name = 'post';


    public function all(){
        $pdo = $this->getDb();
        $req = $pdo->query("SELECT * FROM post LEFT JOIN categorie ON post.idCategorie = categorie.id");
        $data = $req->fetchAll();
        return $data;
    }

    public function findByCat($id){
        $pdo = $this->getDb();
        $req = $pdo->query("SELECT * FROM post  LEFT JOIN categorie ON post.idCategorie = categorie.id where idCategorie = {$id} ");
        $data = $req->fetchAll();
        return $data;
    }

    public function find($id){
        $pdo = $this->getDb();
        $req = $pdo->query("SELECT * FROM post  LEFT JOIN categorie ON post.idCategorie = categorie.id WHERE post.id = {$id} ");
        $data = $req->fetch();
        return $data;
    }
    public function NbCritique($id){
        $pdo = $this->getDb();
        $req = $pdo->query("SELECT count(*) FROM critique WHERE idPost = {$id} ");
        $data = $req->fetch();
        return $data[0];
    }
    public function showCritiqueByPost($id){
        $pdo = $this->getDb();
        $req = $pdo->query("SELECT * FROM critique LEFT JOIN user on user.id = critique.idUser WHERE idPost = {$id}");
        $data = $req->fetchAll();
        return $data;
    }

}