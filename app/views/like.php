<?php
var_dump($_GET);

$action = new \app\php\factory\ActionFactory();

$like = $action->dislikePost(1,3,'post');
var_dump($like);
