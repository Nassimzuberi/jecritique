<?php

namespace app\php\controller;

use app\php\factory\CommentFactory;
use app\php\factory\CritiqueFactory;
use app\php\factory\PostFactory;
use app\php\factory\UserFactory;

class CritiqueController extends HomeController{


    public function indexCrit()
    {
        $userFactory = new UserFactory();
        $commentFactory = new CommentFactory();
        $postFactory = new PostFactory();
        $critiqueFactory = new CritiqueFactory();
        $critique = $critiqueFactory->find($_GET['id']);
        $post = $postFactory->find($critique['idPost']);
        $comments = $critiqueFactory->showCommentByCritique($_GET['id']);
        if($_POST){
            if(isset($_SESSION['user'])){
                $commentFactory->create($_POST);
            }
            else{
                header('location:?p=connexion');
            }
        }
        $this->render('index.critique',compact('critique','comments','post','userFactory'));
    }
}