<?php
namespace app\php\factory;

use Nassim\Php\Factory;

class CategorieFactory extends Factory
{

    protected $class_name = 'categorie';

    public function countPostByCat($id){
        $pdo = $this->getDb();
        $req = $pdo->query("SELECT count(*) FROM post where idCategorie = {$id} ");
        $data = $req->fetch();
        return $data;
    }

    public function read()
    {

    }

    public function update()
    {
    }

    public function delete()
    {

    }

}