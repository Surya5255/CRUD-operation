<?php

$ID = $_GET["Id"];
include 'connection.php';
echo $ID;
$sql = "select * from login where ID='$ID'";
$result = mysqli_query($conn,$sql);

$data =$result->fetch_assoc();
echo $data["Name"]
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="./update.php" method="post" >
    <label for="fid">ID:</label><br>
    <input type="text" id="fid" disable name="id" value='<?php echo $ID ?>'><br>
    <label for="fname">Name:</label><br>
    <input type="text" id="fname" name="uname" value='<?php echo $data["Name"]?>'><br>
    <label for="password">Password:</label><br>
    <input type="text" id="password" name="upass" value='<?php echo $data["Password"]?>'><br><br>
    <input type="submit" value="Submit">
</form> 
</body>
</html>