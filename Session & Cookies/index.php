<?php

session_start();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <?php 
    if (session_id() == '' || !isset($_SESSION['login'])) {
    ?>
        <button><a href="./login.php">Login</a></button>
        <button><a href="./signup.php">Signup</a></button>
    <?php 
    } else {
        echo "Hi, " . $_SESSION['login'];
    ?>
        <button><a href="./logout.php">Logout</a></button>
    <?php 
    }
    ?>
</body>
</html>