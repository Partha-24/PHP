<?php
// $GLOBALS['_']
$x = 10;
$y = 20;

function sum(){
    $GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'];
}

sum();
echo "z : ".$GLOBALS['z'];

// $_SERVER
echo "<br>------------------------------------------------------<br>";
echo 'PHP_SELF : '.$_SERVER['PHP_SELF'];
echo "<br><br>";
echo 'SERVER_NAME : '.$_SERVER['SERVER_NAME'];
echo "<br><br>";
echo 'HTTP_HOST : '.$_SERVER['HTTP_HOST'];
echo "<br><br>";
echo 'HTTP_REFERER : '.$_SERVER['HTTP_REFERER'];
echo "<br><br>";
echo 'HTTP_USER_AGENT : '.$_SERVER['HTTP_USER_AGENT'];
echo "<br><br>";
echo 'SCRIPT_NAME : '.$_SERVER['SCRIPT_NAME'];

//
echo "<br>------------------------------------------------------<br>";

?>

<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    First Name: <input required type="text" name="fname">
    Last Name: <input required type="text" name="lname">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = htmlspecialchars($_REQUEST['fname']); //_REQUEST to fetch data from form after submitting
    $last_name = htmlspecialchars($_POST['lname']); //_POST to fetch data from form after submitting
    echo $first_name." ".$last_name;
}
?>

</body>
</html>

<?php
echo "<br>------------------------------------------------------<br>";
?>

