<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 26/09/2019
 * Time: 10:14
 */
namespace app\php\factory;
use \PDO;
class DbTools
{

    const HOST="localhost";
    const USER="root";
    const MDP="";
    const DBNAME="jecritique";

    private $bdd;
    public function connectDB(){

        $this->bdd = new PDO("mysql:host=". SELF::HOST. ";dbname=" . SELF::DBNAME . ";charset=utf8", SELF::USER,SELF::MDP);
        return $this->bdd;
    }
    public function disconnectDB($db){
        $this->bdd = null;

    }
}