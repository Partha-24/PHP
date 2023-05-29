<?php

session_start();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    if (session_id() == '' || !isset($_SESSION['login'])) {
        header('Location: ./login.php'); 
    }else if (isset($_SESSION['login']) && $_SESSION['userType'] == 'admin') {
        header('Location: ./adminPage.php');
    }else{
        header('Location: ./adminPage.php');
    }
    ?>
</body>
</html>