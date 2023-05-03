<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, td, th {
            border: 1px solid black;
            padding: 5px;
        }

        th {
            text-align: left;
        }
    </style>
</head>
<body>

<?php

$q = $_GET['q'];

$user = 'root';
$password = 'pphhpp';
$database = 'test';
$servername='localhost';

$mysqli = new mysqli($servername, $user, $password, $database);

if($q == "Male"){
    $fetchDataQuery = " SELECT * FROM person WHERE gender = ".'"Male"';
}else if($q == "Female"){
    $fetchDataQuery = " SELECT * FROM person WHERE gender = ".'"Female"';
}else{
    $fetchDataQuery = " SELECT * FROM person WHERE gender <> ".'"Male" and '."gender <> ".'"Female"';
}

$result = $mysqli->query($fetchDataQuery);


echo "<table>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Gender</th>
<th>Email</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['last_name'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>
</body>
</html>