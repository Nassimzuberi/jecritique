<?php

namespace app\php\controller;


use app\php\factory\ActionFactory;
use app\php\factory\CategorieFactory;
use app\php\factory\PostFactory;
use app\php\factory\UserFactory;
use app\php\model\Category;
use app\php\model\User;
use Nassim\Php\Controller;

class HomeController extends Controller
{
    protected $template = 'default';

    public function __construct(){
        $this->viewPath = ROOT . '/app/views/';
    }

    public function index(){
        header('location:index.php');
    }

    public function home(){
        $userFactory = new UserFactory();
        if(isset($_SESSION['user'])){
            $auth = new User($userFactory->find($_SESSION['user']));
        }
        $postFactory = new PostFactory();
        $posts = $postFactory->all();
        $category = new CategorieFactory();
        $categories = $category->all();
        $this->render('home',compact('posts','categories','category','auth','postFactory','userFactory'));
    }

    public function like(){
        if(isset($_SESSION['user'])){
            $action = new ActionFactory();
            $action->like($_SESSION['user'],$_GET['id'],$_GET['objet']);
            $previous = $_SERVER['HTTP_REFERER'];
            header('location:'.$previous);
        } else{
            header('location:?p=connexion');

        }

    }
    public function dislike(){
        if(isset($_SESSION['user'])) {
            $action = new ActionFactory();
            $action->dislike($_SESSION['user'], $_GET['id'], $_GET['objet']);
            $previous = $_SERVER['HTTP_REFERER'];
            header('location:' . $previous);
        }
        else{
            header('location:?p=connexion');
        }

    }

    public function likeTest(){
        $this->render('like');
    }
}