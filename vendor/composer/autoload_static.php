<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0524173710fbc17416f3f5b133785e63
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0524173710fbc17416f3f5b133785e63::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0524173710fbc17416f3f5b133785e63::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
