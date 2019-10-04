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
            $result = $statement->fetch();
            $this->user = new User($result);
            $_SESSION['user'] = $this->user->getId();
            return true;
        }else{
            return false;
        }
    }

    public function getUser(){

        return $this->user;
    }
    public function read(){

    }

    public function update(){
    }
    public function delete(){

    }

}