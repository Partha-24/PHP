<?php

$user = 'root';
$password = 'pphhpp';
$database = 'test';
$servername='localhost';

$id = $_POST["id"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$gender = $_POST["gender"];
$email = $_POST["email"];

$mysqli = new mysqli($servername, $user, $password, $database);

$updateDataQuery = "UPDATE person SET first_name = '{$first_name}', last_name = '{$last_name}', gender = '{$gender}', email = '{$email}' WHERE id = '{$id}'";

if($mysqli->query($updateDataQuery)){
    echo 1;
}else{
    echo 0;
}

?>