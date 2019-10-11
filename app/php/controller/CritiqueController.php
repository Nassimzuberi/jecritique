<?php

namespace app\php\controller;

use app\php\factory\CommentFactory;
use app\php\factory\CritiqueFactory;

class CritiqueController extends HomeController{


    public function indexCrit()
    {
        $commentFactory = new CommentFactory();

        $critiqueFactory = new CritiqueFactory();
        $critique = $critiqueFactory->find($_GET['id']);

        $comments = $critiqueFactory->showCommentByCritique($_GET['id']);
        if($_POST){
            if(isset($_SESSION['user'])){
                $commentFactory->create($_POST);
            }
            else{
                header('location:?p=connexion');
            }
        }
        $this->render('index.critique',compact('critique','comments'));
    }
}