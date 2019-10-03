<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 26/09/2019
 * Time: 10:01
 */
namespace app\php\factory;

use app\php\model\User;
use Nassim\Php\Factory;
use \PDO;

class UserFactory extends Factory
{
    protected $class_name = 'user';
    private $user;

    public function connectUser($pseudo,$mdp){
        $db = new DbTools();
        $pdo = $db->connectDB();
        $statement = $pdo->prepare('select * FROM user WHERE pseudo = :pseudo and mdp= :mdp');
        $res = $statement->execute([
            'pseudo' => $pseudo,
            'mdp' => $mdp
        ]);
        if($res){
            $result = $statement->fetch(PDO::FETCH_NUM);
            foreach($result as $key => $val){
                $donnees[]= $val;
            }
            $id = $donnees[0];
            $data = array_slice($donnees,1);

            $this->user = new User($data);
            $this->user->getId();

        }
    }

    public function getUser(){

    }
    public function read(){

    }

    public function update(){
    }
    public function delete(){

    }

}