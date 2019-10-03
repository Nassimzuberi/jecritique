<?php

namespace App;

class Autoloader{

    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));

    }


    public static function autoload($class_name){
        require ROOT . '/'. $class_name .'.php';
    }
}