<?php

class car{
    public $brand;
    public $model;
    public $color;
    
    function __construct($brand, $model, $color, $tyre){
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        // $this->tyre = $tyre;
        // $this->x=100;
        /*this above line is giving an error because the variable x isn't declared outside the constructor
        but it is possible to declare a variable using this keyword inside constructor in php */ 
    }

    function get(){
        // echo $this->brand, " ", $this->model, " ", $this->color, " ", $this->tyre ,"\n";
        echo $this->brand, " ", $this->model, " ", $this->color, " ","\n";
        // echo "this is giving an error but still working : ", $this->x; 
    }

    function __destruct(){
        echo "\ndestruct";
    }
}


$M4 = new car('BMW', 'M4', 'Gray', 'MRF');
$M4->$price = "$50000";
$M4->get();
echo "\nPriceeeeeeeeeeeeeee : ", $M4->$price;
echo "\ncolor : ", $M4->color;
?>