<?php

class xyz{

    public $publicVar;
    private $privateVar;
    protected $protectedVar;

    function __construct($varA, $varB, $varC){
        $this->publicVar = $varA;
        $this->privateVar = $varB;
        $this->protectedVar = $varC;
    }

    function getter(){
        echo "Getter : ", $this->publicVar, " ", $this->privateVar, " ", $this->protectedVar; 
    }
}

class abc extends xyz{

    function childGetter(){
        echo "protectedVar : ",$this->protectedVar;
    }

}

$obj1 = new xyz(10, 20, 30);
$obj2 = new abc(100, 200, 300);

$obj1->getter(); echo "<br>";

echo "publicVar : ",$obj1->publicVar; echo "<br>";
// echo "privateVar : ",$obj1->privateVar; echo "<br>"; can't do it like this have to user getter
// echo "protectedVar : ",$obj1->protectedVar; echo "<br>"; user getter or inside child class

$obj2->childGetter();

?>