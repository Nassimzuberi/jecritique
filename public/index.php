<?php

use App\Autoloader;

define('ROOT',dirname(__DIR__));
session_start();
require_once ROOT . '/app/php/Autoloader.php';
Autoloader::register();
require_once ROOT . '/Nassim/Autoloader.php';
\Nassim\Autoloader::register();

if(isset($_GET['p'])){
    $page = $_GET['p'];
}else {
    $page= 'home';
    $controller = new \app\php\controller\HomeController;
    $controller->home();
}

if($page === 'inscription'){
    $controller = new \app\php\controller\UserController;
    $controller->inscription();
}
if($page === 'connexion'){
    $controller = new \app\php\controller\UserController;
    $controller->connexion();
}
if($page === "deconnexion"){
    $controller = new \app\php\controller\UserController;
    $controller->deconnexion();
}
if($page === 'add.post'){
    $controller = new \app\php\controller\PostController;
    $controller->add();
}
if($page === 'add.categorie'){
    $controller = new \app\php\controller\CategorieController;
    $controller->add();
}
if($page === 'index.categorie'){
    $controller = new \app\php\controller\CategorieController;
    $controller->indexCat();
}
if($page === 'index.post'){
    $controller = new \app\php\controller\PostController;
    $controller->indexPost();
}
if($page === 'index.critique'){
    $controller = new \app\php\controller\CritiqueController;
    $controller->indexCrit();
}
if($page === 'index.user'){
    $controller = new \app\php\controller\UserController;
    $controller->moncompte();
}
if($page === 'like'){
    $controller = new \app\php\controller\HomeController;
    $controller->like();
}
if($page === 'dislike'){
    $controller = new \app\php\controller\HomeController;
    $controller->dislike();
}
/*
$array = array('nom' => 'Nassim' , 'prenom' => 'ZUBERI', 'email' => 'nassim.zuberi2@hotmail.fr', 'mdp' => '123456', 'pseudo' => 'Gosphos', 'dateinscription' => '2019-09-26');

$user->create($array);
*/