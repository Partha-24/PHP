<?php

namespace classes;

class fruit{
    public $name;
    public $color;

    function setName($name){
        $this->name = $name;
    }

    function getName(){
        return $this->name;
    }
}

$apple = new fruit();
$banana = new fruit();

$apple->setName('Apple');
$banana->setName('Banana');
$apple->color = 'Red';

// echo $apple->color;
// echo "<br>";
// echo $apple->getName();
// echo "<br>";
// echo $banana->getName();
// echo "<br>";
// var_dump($apple instanceof fruit);


?>