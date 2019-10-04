<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 03/10/2019
 * Time: 13:59
 */

namespace app\php\controller;


use app\php\factory\CategorieFactory;
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
        $post = $posts->find($_GET['id']);
        $this->render('index.post',compact('post'));
    }
}