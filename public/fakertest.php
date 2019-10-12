<?php
require_once '../vendor/autoload.php';
require_once '../app/php/factory/DbTools.php';
require_once '../Nassim/Php/Factory.php';
require_once '../Nassim/Php/Traits/Likeable.php';
require_once '../app/php/factory/CommentFactory.php';
require_once '../app/php/factory/CritiqueFactory.php';



$faker = Faker\Factory::create();
$factory = new \app\php\factory\CommentFactory();

for($i=0;$i<50;$i++){
    $array = [];
    $array['idCritique'] = $faker->numberBetween(2,100);
    $array['idUser'] = $faker->numberBetween(1,8);
    $array['text'] = $faker->realText(300,2);

    $res = $factory->create($array);
    var_dump($res);
}


/*


$factory = new \app\php\factory\CritiqueFactory();

for($i=0;$i<50;$i++){
    $array = [];
    $array['idUser'] = $faker->numberBetween(1,8);
    $array['idPost'] = $faker->numberBetween(14,23);
    $array['text'] = $faker->realText(300,2);
    $res = $factory->create($array);
    var_dump($res);

}

$factory = new \app\php\factory\PostFactory();

for($i=0;$i<10;$i++){
    $array = [];
    $array['titre'] = $faker->sentence($nbWords = 6, $variableNbWords = true);
    $array['link'] = $faker->url;
    $array['idCategorie'] = $faker->numberBetween(1,4);
    $array['source'] = $faker->company;
    $array['text'] = $faker->realText(1000,2);
    $factory->create($array);
}

*/