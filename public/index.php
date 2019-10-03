<?php

use App\Autoloader;

define('ROOT',dirname(__DIR__));
session_start();
require ROOT . '/app/php/Autoloader.php';
Autoloader::register();
require ROOT . '/Nassim/Autoloader.php';
\Nassim\Autoloader::register();

$user = new \app\php\factory\UserFactory();


$array = array('nom' => 'Nassim' , 'prenom' => 'ZUBERI', 'email' => 'nassim.zuberi@hotmail.fr', 'mdp' => '123456', 'pseudo' => 'natayoshi', 'dateinscription' => '2019-09-26');

$user->create($array);
