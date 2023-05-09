<?php

$user = 'root';
$password = 'pphhpp';
$database = 'test';
$servername='localhost';

$mysqli = new mysqli($servername, $user, $password, $database);


$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$password = $_POST["password"];
$usertype = $_POST["usertype"];


$fetchDataQuery = "SELECT * FROM person WHERE email = '{$email}'";
$result = $mysqli->query($fetchDataQuery);

if(mysqli_num_rows($result) > 0){
    echo 2;
}else{
    $insertDataQuery = "INSERT INTO person (first_name, last_name, gender, email, password, usertype) values ('{$first_name}', '{$last_name}', '{$gender}', '{$email}', '{$password}', '{$usertype}');";
    if($mysqli->query($insertDataQuery)){
        echo 1;
    }else{
        echo 0;
    }
}
?>