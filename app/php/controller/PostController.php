<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 03/10/2019
 * Time: 13:59
 */

namespace app\php\controller;


use app\php\factory\CategorieFactory;
use app\php\factory\CritiqueFactory;
use app\php\factory\PostFactory;

class PostController extends HomeController
{

    public function add(){
        $categorieFactory = new CategorieFactory();
        $categories = $categorieFactory->all();
        $post = new PostFactory();
        $success = null;
        if($_POST){
            foreach($_POST as $key => $val){
                $formdata[$key] = $val;
            }
            if($post->create($formdata)){
                $success = true;
            }else{
                $success = false;
            }
        }

        $this->render('add.post', compact('categories','success'));
    }

    public function indexPost(){
        $posts = new PostFactory();
        $critiqueFactory = new CritiqueFactory();
        $post = $posts->find($_GET['id']);
        $critiques = $posts->showCritiqueByPost($_GET['id']);

        if($_POST){
            if(isset($_SESSION['user'])){
                $critiqueFactory->create($_POST);
            }
            else{
                header('location:?p=connexion');
            }
        }
        $this->render('index.post',compact('post','critiques','critiqueFactory'));
    }

}