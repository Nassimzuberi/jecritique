<?php

namespace app\php\controller;

use app\php\factory\UserFactory;

class UserController extends HomeController{

    public function inscription(){

        $user = new UserFactory();
        $success = null;
        if($_POST){
            foreach($_POST as $key => $val){
                if(!($key === "mdpconfirm")){
                    $formdata[$key] = $val;
                }
            }
            if($_POST['mdp'] == $_POST['mdpconfirm']){
                if($user->create($formdata)){

                    $success = true;
                }
            }
            else{
                echo "<div class='alert alert-danger'>Les deux mot de passe doivent correspondre </div>";
            }
        }
        $this->render('inscription',compact('formdata','success'));
    }

    public function connexion(){

        $userFactory = new UserFactory();
        $success = null;
        if($_POST){
            if($userFactory->connectUser($_POST['pseudo'],$_POST['mdp'])){
                $this->index();
            }
        }
        $this->render('connexion',compact('user','success'));
    }

    public function deconnexion(){
        session_destroy();
        $this->index();
    }

    public function moncompte(){
        $users = new UserFactory();
        $user = $users->find($_SESSION['user']);

        $this->render('index.user', compact('user'));
    }

}
/*
if(isset($_POST)){
    $userFactory = new \app\php\factory\UserFactory(null);
    $postValues = array_values($_POST);
    $date = array_slice($postValues,1,6);
    $userFactory->create($data);
    $myUser = $userFactory->getUser();
    if($myUser){
        header('location:../../views/accueil.php?user=',$myUser->getId());
    }
}
if($method == 'create'){
    create();
}
*/