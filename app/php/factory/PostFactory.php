<?php
namespace app\php\factory;

use Nassim\Php\Factory;

class PostFactory extends Factory
{
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
    public function read(){

    }

    public function update(){
    }
    public function delete(){

    }

}