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
        $this->render('home',compact('posts','categories','category','auth','postFactory'));
    }

    public function like(){
        $action = new ActionFactory();
        $postFactory = new PostFactory();
        $like = $action->likePost($_SESSION['user'],$_GET['id'],$_GET['objet']);
            if(!$like){
                $postFactory->like($_GET['id']);
                header('location:index.php');
            }
            else{
                $action->delete($like['id']);
                $postFactory->unlike($_GET['id']);
                header('location:index.php');
            }
    }
    public function dislike(){
        $action = new ActionFactory();
        $postFactory = new PostFactory();
        $dislike = $action->dislikePost($_SESSION['user'],$_GET['id'],$_GET['objet']);
        if(!$dislike){
            $postFactory->dislike($_GET['id']);
            header('location:index.php');
        }
        else{
            $action->delete($dislike['id']);
            $postFactory->undislike($_GET['id']);
            header('location:index.php');
        }
    }
}