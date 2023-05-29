<?php

$user = 'root';
$password = 'pphhpp';
$database = 'test';
$servername='localhost';

$mysqli = new mysqli($servername, $user, $password, $database);

$fetchDataQuery = " SELECT * FROM form_data";
$result = $mysqli->query($fetchDataQuery);

$fname = $lname = $email = $gender = $website = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $gender = test_input($_POST["gender"]);

    $file_tmp =$_FILES['image']['tmp_name'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    $newName = uniqid("IMG").'.'.$file_ext;
    move_uploaded_file($file_tmp,"images/".$newName);
    
    $insertDataQuery = "INSERT INTO form_data (first_name, last_name, email, website, gender, image) values ('".$fname."', '".$lname."', '".$email."', '".$website."', '".$gender."','".$newName."');";
    $resultt = $mysqli->query($insertDataQuery);
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$mysqli->close();

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Form.css">
</head>

<body>
<p id="errors"></p>
<div id="wrapper">
    <div id="formDiv">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
            <div class="formInp">
                <input class="inputFields" required type="text" name="fname" placeholder="First Name">
            </div>
            <div class="formInp">
                <input class="inputFields" required type="text" name="lname" placeholder="Last Name">
            </div>
            <div class="formInp">
                <input class="inputFields" required type="text" name="email" placeholder="E-mail">
            </div>
            <div class="formInp">
                <input class="inputFields" type="text" name="website" placeholder="Website">
            </div>
            <div>
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="other">Other
                <br><br>
                <div id="fileInput">
                    <input class="fileInp" type="file" required name="image">
                </div>
            </div>
            <div id="btnDiv"> 
                <input id="fileInp" type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>
    <div id="tableDiv">
        <section>
            <table>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Gender</th>
                    <th>Image</th>
                </tr>
                <?php
                    while($rows=$result->fetch_assoc()){
                ?>	
                <tr>
                    <td><?php echo $rows['id'];?></td>
                    <td><?php echo $rows['first_name'];?></td>
                    <td><?php echo $rows['last_name'];?></td>
                    <td><?php echo $rows['email'];?></td>
                    <td><?php echo $rows['website'];?></td>
                    <td><?php echo $rows['gender'];?></td>
                    <td><?php echo '</br><img id="imgDiv" src=images/'.$rows["image"] .' alt="Image Unavailable">'; ?></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </section>
    </div>
</div>

</body>

</html>

