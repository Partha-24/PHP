<?php
session_start();

$user = 'root';
$password = 'pphhpp';
$database = 'test';
$servername='localhost';

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$usertype = $_POST["usertype"];

$mysqli = new mysqli($servername, $user, $password, $database);

$updateDataQuery = "UPDATE person SET first_name = '{$first_name}', last_name = '{$last_name}', gender = '{$gender}', email = '{$email}', usertype = '{$usertype}' WHERE email = '{$email}'";

if($mysqli->query($updateDataQuery)){
    $_SESSION['firstName'] = $first_name;
    $_SESSION['lastName'] = $last_name;
    $_SESSION['userEmail'] = $email;
    $_SESSION['userGender'] = $gender;
    $_SESSION['userType'] = $usertype;
    echo 1;
}else{
    echo 0;
}

?>