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
use app\php\factory\UserFactory;

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
            if(isset($_FILES)){
                $parts = explode('.', $_FILES['image']['name']);
                $dir=ROOT . '/app/static/image/post/';
                $tmp = $_FILES{'image'}['tmp_name'];
                $name = str_replace('.','',$_POST['titre']) . '.'. $parts[1];
                move_uploaded_file($tmp, $dir . $name);
                $formdata['imgname'] = $name;
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
        $userFactory = new UserFactory();
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
        $this->render('index.post',compact('post','critiques','critiqueFactory','userFactory'));
    }

}