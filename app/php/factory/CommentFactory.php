<?php
namespace app\php\factory;

use Nassim\Php\Factory;
use Nassim\Php\Traits\Likeable;

class CommentFactory extends Factory
{
    use Likeable;
    protected $class_name = 'comment';


}