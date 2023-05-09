<?php

session_start();

if(isset($_SESSION['userName'])){
    header('Location: adminPage.php');
}

setcookie(session_name(), "", time() - 3600); //send browser command remove sid from cookie
session_destroy(); //remove sid-login from server storage
session_write_close();
header('Location: login.php');

?>