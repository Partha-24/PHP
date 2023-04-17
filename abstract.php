<?php

abstract class car{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    abstract public function intro():string; // defining return type
}

class bmw extends car{
    public function intro():string{
        return "BMW M Series";
    }
}

class mercedes extends car{
    public function intro():string{
        return "Mercedes AMG";
    }
}
class audi extends car{
    public function intro():string{
        return "Audi R Series";
    }
}

$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$mercedes = new mercedes("Mercedes");
echo $mercedes->intro();
echo "<br>";

$bmw = new bmw("BMW");
echo $bmw->intro();

?>