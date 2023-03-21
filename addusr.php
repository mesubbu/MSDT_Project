<?php

include 'dbconn.php';

$name=$_POST['sname'];
$regno=$_POST['srgno'];
$mail=$_POST['smail'];
$pass=$_POST['spass'];

$sql="insert into users (sname,srgno,smail,spass) values ('$name','$regno','$mail','$pass');";
mysqli_query($conn,$sql);
echo "SignUp Successfull.";
?>