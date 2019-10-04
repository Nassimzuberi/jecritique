<?php
/**
 * Created by PhpStorm.
 * User: nassi
 * Date: 11/09/2019
 * Time: 20:02
 */
namespace Nassim\Php;

class Controller{
    protected $viewPath;
    protected $template;
    public function render($view, $variables = []){
        ob_start();
        extract($variables);
        require($this->viewPath . str_replace('.', '/',$view) . '.php');
        $content = ob_get_clean();
        require($this->viewPath . 'templates/'. $this->template . '.php');
    }
    protected function forbidden(){
        header('HTTP/1.0 403 Forbidden');
        die('Accès interdit');
    }
    protected function notFound(){
        header('HTTP/1.0 403 Forbidden');
        die('Page introuvable');
    }
}