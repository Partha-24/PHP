<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX & JQuery</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form method="post">
        <div id="parentWrapper">
            <div id="wrapper">
                <div>
                    <input class="inputTextField" required type="email" placeholder="Email" name="loginEmail">
                </div>
                <div >
                    <input class="inputTextField" required type="password" placeholder="Password" name="loginPassword">
                </div>
                <div>
                    <input class="submitBtn" type="submit">
                </div>
                <p>New User! <span id="signUpSpan">Sign Up</span></p>
            </div>
        </div>
    </form>
</body>
</html>