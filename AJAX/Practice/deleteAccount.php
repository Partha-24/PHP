<?php
session_start();

$user = 'root';
$password = 'pphhpp';
$database = 'test';
$servername='localhost';

$email = $_POST["email"];

$mysqli = new mysqli($servername, $user, $password, $database);

$deleteQuery = "DELETE FROM person WHERE email = '{$email}'";

if($mysqli->query($deleteQuery)){
    echo 1;
}else{
    echo 0;
}

?>