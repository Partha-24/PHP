<?php

$user = 'root';
$password = 'pphhpp';
$database = 'test';
$servername='localhost';

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$gender = $_POST["gender"];
$email = $_POST["email"];

$mysqli = new mysqli($servername, $user, $password, $database);

$insertDataQuery = "INSERT INTO person (first_name, last_name, gender, email) values ('{$first_name}', '{$last_name}', '{$gender}', '{$email}');";

if($mysqli->query($insertDataQuery)){
    echo 1;
}else{
    echo 0;
}

?>