
<?php
// $myObj = new stdClass();

// $myObj->name = "John";
// $myObj->age = 30;
// $myObj->city = "New York";

// $myJSON = json_encode($myObj);

// echo $myJSON."\n";

// $myArr = array("John", "Mary", "Peter", "Sally");

// $myJSON = json_encode($myArr);

// echo $myJSON;
?>

<!-- <html>
<body>

<h2>Get JSON Data from a PHP Server</h2>
<p id="demo"></p>

<script>

const xmlhttp = new XMLHttpRequest();
xmlhttp.onload = function() {

    let myObj = JSON.parse(this.responseText);

    console.log(typeof myObj);
    console.log(typeof parsedObj);



    // document.getElementById("demo").innerHTML = myObj[0].first_name;
}
xmlhttp.open("GET", "fetch-json.php");
xmlhttp.send();

</script>

</body>
</html> -->

<!-- ----------------------------------------------------------------- -->
<!-- PHP code to establish connection with the localserver -->
<?php

$user = 'root';
$password = 'pphhpp';
$database = 'test';
$servername='localhost';

$mysqli = new mysqli($servername, $user, $password, $database);
$sql = " SELECT * FROM person";
$result = $mysqli->query($sql);
$mysqli->close();

?>

<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>GFG User Details</title>
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>GeeksForGeeks</h1>
		<table>
			<tr>
				<th>Id</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Gender</th>
				<th>Email</th>
			</tr>
			<?php
				while($rows=$result->fetch_assoc()){
			?>
			<tr>
				<td><?php echo $rows['id'];?></td>
				<td><?php echo $rows['first_name'];?></td>
				<td><?php echo $rows['last_name'];?></td>
				<td><?php echo $rows['gender'];?></td>
				<td><?php echo $rows['email'];?></td>
			</tr>
			<?php
			}
			?>
		</table>
	</section>
</body>

</html>
