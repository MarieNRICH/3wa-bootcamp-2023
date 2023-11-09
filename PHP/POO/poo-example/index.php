<?php

require 'Feline.php';
require 'Cat.php';
$cat = new Cat('Jean','noir',3,true);

var_dump($cat);
$cat->presentation();

/**/

abstract class Fish
{
    public function swim(): void
    {
        echo 'Fsssschhh !';
    }
}

class Pike extends Fish
{
    public function swim(): void
    {
        echo 'Zap !';
    }
}

$pike = new Pike();
//$pike->swim();  // Zap !