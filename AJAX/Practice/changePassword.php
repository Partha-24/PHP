<?php

$user = 'root';
$password = 'pphhpp';
$database = 'test';
$servername='localhost';

$email = $_POST["email"];
$currentPassword = $_POST["currentpass"];
$newPassword = $_POST["newpass"];

$mysqli = new mysqli($servername, $user, $password, $database);

$checkCurrentPassQuery = "SELECT password FROM person where email = '{$email}'";
$currentPasswordResult = $mysqli->query($checkCurrentPassQuery);

$flag = 2;

while($row = mysqli_fetch_array($currentPasswordResult)) {
    if($currentPassword == $row['password']){
        $updatePasswordQuery = "UPDATE person SET password= '{$newPassword}' WHERE email = '{$email}'";
        if($mysqli->query($updatePasswordQuery)){
            $flag = 1;
        }else{
            $flag = 0;
        }
    }
}

echo $flag;








?>