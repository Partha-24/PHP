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

<html>
<body>

<h2>Get JSON Data from a PHP Server</h2>
<p id="demo"></p>
	<?php
	$result = $_GET['dbData'];
	$JSONresult = json_decode($result);
	// echo "result".$JSONresult;
	while($rows=$JSONresult){
		echo "hello ";
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
<table>
	<tr>
		<th>Id</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Gender</th>
		<th>Email</th>
	</tr>
	
</table>

<script>

const xmlhttp = new XMLHttpRequest();
xmlhttp.onload = function() {
    const dbData = JSON.parse(this.responseText);
	// console.log("dbData stringify: "+JSON.stringify(dbData));
	// document.getElementById("demo").innerHTML = dbData[0].first_name;
	// window.location.href = window.location.href+'?dbData='+dbData;
}
xmlhttp.open("GET", "fetch-json.php");
xmlhttp.send();

</script>

</body>
</html>

