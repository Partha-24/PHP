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

// while( $row = $result->fetch_array() ) {
//   echo $row['name'] . " " . $row['email'] . " " . $row['password'];
//   echo "<br />";
// }

$flag = 2;

if (isset($_POST['login']) && isset($_POST['password'])) {

  while($row = $result->fetch_array()){
    if($row['email'] == $_POST['login'] && $_POST['password'] == $row['password']){
      $_SESSION['login'] = $_POST['login'];
      $flag = 0;
      header('Location: ./');
    } else if ($row['email'] == $_POST['login'] && $_POST['password'] != $row['password']) {
      $flag = 1;
    }
  }

  if ($flag == 1) {
    echo "<script>alert('Wrong login or password');</script>";
    echo "<noscript>Wrong login or password</noscript>";
  }else if ($flag == 2) {
    echo "<script>alert('Wrong login or password');</script>";
    echo "<noscript>Wrong login or password</noscript>";
  }
}

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div id="formWrapper">
    <div id="formDiv">
      <form method="post">
        <div id="inputFieldWrapper">
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
        <button id="signupBtn"><a href="./signup.php">Sign Up</a></button>
      </div>
    </div>
  </div>


</body>
</html>

