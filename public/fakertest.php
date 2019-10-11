<?php
require_once '../vendor/autoload.php';
require_once '../app/php/factory/DbTools.php';
require_once '../Nassim/Php/Factory.php';
require_once '../app/php/factory/PostFactory.php';


$faker = Faker\Factory::create();
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



