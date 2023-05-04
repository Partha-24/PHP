<?php

$user = 'root';
$password = 'pphhpp';
$database = 'test';
$servername='localhost';

$id = $_POST["id"];

$mysqli = new mysqli($servername, $user, $password, $database);

$insertDataQuery = "DELETE FROM person WHERE id = '{$id}'";

if($mysqli->query($insertDataQuery)){
    echo 1;
}else{
    echo 0;
}

?>