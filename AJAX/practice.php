<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>
    <script>
        function showHint(str) {
            document.getElementById("txtHint").innerHTML = str;
        }
    </script>
</head>
<body>
    <form action="">
        <label for="fname">Name :</label>
        <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
    </form>
    <p>UseEffect Hook : <span id="txtHint"></span></p>
</body>
</html>