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
use app\php\factory\UserFactory;

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
        $userFactory = new UserFactory();
        $postFactory = new PostFactory();
        $posts = $postFactory->findByCat($_GET['id']);
        $category = new CategorieFactory();
        $categorie = $category->find($_GET['id']);
        $lib = $categorie['lib'];
        $this->render('index.categorie',compact('posts','postFactory','lib','userFactory'));
    }
}