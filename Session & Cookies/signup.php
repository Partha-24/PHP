<?php
session_start();

$user = 'root';
$password = 'pphhpp';
$database = 'test';
$servername='localhost';

$mysqli = new mysqli($servername, $user, $password, $database);

$result = "";
$fetchDataQuery = " SELECT * FROM user_registration";
$result = $mysqli->query($fetchDataQuery);


$name = $email = $password = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["login"]);
    $password = test_input($_POST["password"]);
    $tempResult =$result;

    $alreadyRegistred = "SELECT COUNT(*) FROM user_registration where email = '".$email."'";
    $resulttt = $mysqli->query($alreadyRegistred);

    $row = mysqli_fetch_array($resulttt);
    if ($row["COUNT(*)"] != 0) {
        echo "<script>alert('Email already registered');</script>";
    } else {
        $insertDataQuery = "INSERT INTO user_registration (name, email, password) values ('".$name."', '".$email."', '".$password."');";
        $resultt = $mysqli->query($insertDataQuery);
        $_SESSION['login'] = $_POST['name'];
        echo "idwqoiehdio".$row["COUNT(*)"];
        header('Location:index.php');
    }
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div id="formWrapper">
        <div id="formDiv">
            <form method="post" action="signup.php">
                <div id="inputFieldWrapper">
                    <div>
                        <input required class="inputFields" placeholder="Full Name" name="name">
                    </div>
                    <div>
                        <input required class="inputFields" placeholder="Email" name="login">
                    </div>
                    <div>
                        <input required class="inputFields" placeholder="Password" name="password">
                    </div>
                    <div>
                        <input class="submitBtn" type="submit">
                    </div>
                </div>
            </form>
            <div>
                <button id="loginBtn"><a href="./login.php">Log In</a></button>
            </div>
        </div>
    </div>
</body>
</html>