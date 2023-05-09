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
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <form id="signUpForm">
        <div id="parentWrapper">
            <div id="wrapper">
                <div>
                    <input class="inputTextField" id="fname" required type="text" placeholder="First Name" name="firstName">
                </div>
                <div>
                    <input class="inputTextField" required id="lname" type="text" placeholder="Last Name" name="lastName">
                </div>
                <div id="genderInputDiv">
                    <input type="radio" required name="gender" id="gender" value="Male">Male
                    <input type="radio" required name="gender" id="gender" value="Female">Female
                    <input type="radio" required name="gender" id="gender" value="Other">Other
                </div>
                <div>
                    <input class="inputTextField" id="email" required type="email" placeholder="Email" name="loginEmail">
                </div>
                <div >
                    <input class="inputTextField" required type="password" placeholder="Password" name="loginPassword" id="password">
                </div>
                <div>
                    <input class="submitBtn" type="submit" Value="Sign Up">
                </div>
                <p>Already a user! <span id="signUpSpan" onclick="location.href = './login.php'">Sign in</span></p>
            </div>
        </div>
    </form>
</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">

    $(document).ready(function(){
        $("#signUpForm").submit(function(e){
            e.preventDefault();
            var fname = $("#fname").val();
            var lname = $("#lname").val();
            var email = $("#email").val();
            var gender = $('input[name="gender"]:checked').val();
            var password = $("#password").val();
            $.ajax({
                url: "/AJAX/Practice/addRecord.php",
                type: "POST",
                data: {
                    first_name: fname,
                    last_name: lname,
                    email: email,
                    gender: gender,
                    password: password,
                    usertype: "normal"
                },
                success: function(data){
                    if(data == 1){
                        alert("Sign Up Successful")
                        $("#editForm").trigger("reset");
                        window.location.href = 'login.php';
                    }else if(data == 2){   
                        alert("Email already registred");
                    }else{
                        alert("Error! Registration Failed")
                    }
                }
            })
        })
    })



</script>

</html>