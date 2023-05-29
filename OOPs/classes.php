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

echo "inside classes.php\n";
echo $apple->color;
echo "\n";
echo $apple->getName();
echo "\n";
echo $banana->getName();
echo "\n";
var_dump($apple instanceof fruit);


?>