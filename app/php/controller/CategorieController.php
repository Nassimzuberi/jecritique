<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 03/10/2019
 * Time: 14:31
 */

namespace app\php\controller;


use app\php\factory\CategorieFactory;
use app\php\factory\PostFactory;

class CategorieController extends HomeController
{

    public function add(){
        $post = new CategorieFactory();
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

        $this->render('add.categorie', compact('success'));
    }
    public function indexCat(){
        $post = new PostFactory();
        $posts = $post->findByCat($_GET['id']);
        $this->render('index.categorie',compact('posts'));
    }
}