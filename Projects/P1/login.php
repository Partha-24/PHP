<?php 
session_start();
if(isset($_SESSION['userName'])){
    header('Location: adminPage.php');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX & JQuery</title>
    <link rel="stylesheet" href="login.css">
</head>

<?php 
    include 'DBconn.php';

    if(isset($_POST['loginFormSubmit'])){
        $email = $_POST['loginEmail'];
        $password = $_POST['loginPassword'];

        $emailSearch = "SELECT * FROM person WHERE email='$email'";
        $query = mysqli_query($con, $emailSearch);
        $emailCount = mysqli_num_rows($query);

        if($emailCount){
            $emailPass = mysqli_fetch_assoc($query);
            $dbPass = $emailPass['password'];   
            $_SESSION['userName'] = $emailPass['first_name']." ".$emailPass['last_name'];
            $_SESSION['userEmail'] = $emailPass['email'];
            if($password == $dbPass){
                echo "<script>alert('login successful')</script>";
                header('Location: adminPage.php'); 
            }else{
                echo "<script>alert('Password Incorrect')</script>";
            }
        }else{
            echo "<script>alert('User Does Not Exist')</script>";   
        }
    }
?>

<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <div id="parentWrapper">
            <div id="wrapper">
                <div>
                    <input class="inputTextField" required type="email" placeholder="Email" name="loginEmail">
                </div>
                <div >
                    <input class="inputTextField" required type="password" placeholder="Password" name="loginPassword">
                </div>
                <div>
                    <input class="submitBtn" type="submit" value="Login" name="loginFormSubmit">
                </div>
                <p>New User! <span onclick="location.href = './signup.php'" id="signUpSpan">Sign Up</span></p>
            </div>
        </div>
    </form>
</body>
</html>