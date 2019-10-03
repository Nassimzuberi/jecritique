<?php
require('../factory/UserFactory.php');

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