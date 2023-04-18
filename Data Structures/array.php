<?php

$cars = array("nano", 1, 3.14);
print_r($cars);
echo "\n";
printf("%s\n",$cars[0]);


$nameAge = array("Partha"=>"20", "Alin"=>"25", "Gunjan"=>"23", "Sudip"=>"23");
$nameAge["Mustansir"] = 22;

foreach($nameAge as $key => $value){
    echo "Key : ".$key." | Value : ".$value;
    echo"\n";
}