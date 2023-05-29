<?php

// $myObj = new stdClass();
// $myObj->name = "John";
// $myObj->age = 30;
// $myObj->city = "New York";
// $myJSON = json_encode($myObj);
// echo $myJSON;

$conn = mysqli_connect("localhost","root","pphhpp", "test") or die ("connection failed") ;
$sqldata = "SELECT * FROM person";
$result = mysqli_query($conn, $sqldata) or die("SQL Query failed");
$output = mysqli_fetch_all($result, MYSQLI_ASSOC);

// echo "<pre>";
// print_r($output);
// echo "</pre>";

echo json_encode($output);

?>