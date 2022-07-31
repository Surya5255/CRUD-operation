<?php
$Name = $_POST["uname"];
$Password = $_POST["upass"];
include 'connection.php';


$sql ="Select * from login where Name ='$Name' and Password ='$Password'";

$result = mysqli_query($conn,$sql);

if($check = $result->fetch_assoc()){
    echo $check["Name"];
}else{
    $sql="insert into login (ID,Name,Password) values ('None','$Name','$Password')";
    mysqli_query($conn,$sql);
    echo "Create";
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="padding:20%;">
    <table>
        <tr>
            <th>Name</th>
            <th>Password</th>
        </tr>
        <tr>
            <td>
           <?php
                echo "<td>$Name</td>";
                echo "<td>$Password</td>";
            ?>
            </td>
        </tr>
        <tr>
            <td><a href="./Edit.php?Id=<?php echo $check["Id"]; ?>">Edit</a></td>
        </tr>
    </table>
</body>
</html>