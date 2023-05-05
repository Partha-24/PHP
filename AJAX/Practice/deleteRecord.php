<?php

$user = 'root';
$password = 'pphhpp';
$database = 'test';
$servername='localhost';

$id = $_POST["id"];

$mysqli = new mysqli($servername, $user, $password, $database);

$fetchDataQuery = "SELECT * FROM person";
$resultData = $mysqli->query($fetchDataQuery);

if(mysqli_num_rows($resultData) == 1){
    $insertDataQuery = "TRUNCATE person";
}else{
    $insertDataQuery = "DELETE FROM person WHERE id = '{$id}'";
}


if($mysqli->query($insertDataQuery)){
    echo 1;
}else{
    echo 0;
}

?>