<?php

//normal array----------------------------------------
$cars = array("nano", 1, 3.14);
// print_r($cars);
// echo "\n";
// printf("%s\n",$cars[0]);

//associative array----------------------------------------
$nameAge = array("Partha"=>"20", "Alin"=>"25", "Gunjan"=>"23", "Sudip"=>"23");
$nameAge["Mustansir"] = 22;

// foreach($nameAge as $key => $value){
//     echo "Key : ".$key." | Value : ".$value;
//     echo"\n";
// }

//2d array----------------------------------------
$bike = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);

// for($row = 0; $row <= 2 ; $row++){
//     for($col = 0 ; $col <= 2; $col++){
//         echo $bike[$row][$col]." ";
//     }
//     echo "\n";
// }

//2d associative array----------------------------------------
$twoAsoArray = array(
    "Alin" => array(
        "Physics"=>70,
        "Chemistry"=>70,
        "Math"=>70
    ),
    "Sudip" => array(
        "Physics"=>75,
        "Chemistry"=>75,
        "Math"=>75
    ),
    "Partha" => array(
        "Physics"=>80,
        "Chemistry"=>80,
        "Math"=>80
    )
);

// echo $twoAsoArray["Alin"]["Physics"];

// $keys = array_keys($twoAsoArray);
// for($i = 0; $i < count($twoAsoArray); $i++) {
//     echo $keys[$i] . "\n";
//     foreach($twoAsoArray[$keys[$i]] as $key => $value) {
//         echo $key . " : " . $value . "\n";
//     }
//     echo "\n";
// }

foreach($twoAsoArray as $x) {
    echo $x['Physics']. " ".$x['Chemistry']." ".$x['Math']."\n"; 
}


//3d array----------------------------------------

$myarray = array(
    array(
        array(1, 2),
        array(3, 4),
    ),
    array(
        array(5, 6),
        array(7, 8),
    ),
);
