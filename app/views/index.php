<?php

use app\php\factory\UserFactory;

require('..\php\factory\DbTools.php');
require('..\php\factory\UserFactory.php');
require('..\php\model/User.php');

$user = new UserFactory();


$array = array('nom' => 'Nassim' , 'prenom' => 'ZUBERI', 'email' => 'nassim.zuberi@hotmail.fr', 'mdp' => '123456', 'pseudo' => 'natayoshi', 'dateinscription' => '2019-09-26');

$user->create($array);
