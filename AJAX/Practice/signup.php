<?php 


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX & JQuery</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <form action="">
        <div id="parentWrapper">
            <div id="wrapper">
                <div>
                    <input class="inputTextField" required type="email" placeholder="First Name" name="loginEmail">
                </div>
                <div>
                    <input class="inputTextField" required type="email" placeholder="Last Name" name="loginEmail">
                </div>
                <div id="genderInputDiv">
                    <input type="radio" required name="gender" id="gender" value="Male">Male
                    <input type="radio" required name="gender" id="gender" value="Female">Female
                    <input type="radio" required name="gender" id="gender" value="Other">Other
                </div>
                <div>
                    <input class="inputTextField" required type="email" placeholder="Email" name="loginEmail">
                </div>
                <div >
                    <input class="inputTextField" required type="password" placeholder="Password" name="loginPassword">
                </div>
                <div>
                    <input class="submitBtn" type="submit" Value    ="Sign Up">
                </div>
                <p>Already a user! <span id="signUpSpan">Sign in</span></p>
            </div>
        </div>
    </form>
</body>
</html>