<?php
include 'connection.php';
$id = $_POST["id"];
$Name = $_POST["uname"];
$Password =$_POST["upass"];
$sql ="UPDATE `login` SET `Name`='$Name',`Password`='$Password' WHERE 'ID' =$id";
if(mysqli_query($conn,$sql)){
    echo "work";
}

echo "update";
?>