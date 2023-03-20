<?php
include 'dbconn.php';

$mail=$_POST['smail'];
$pass=$_POST['spass'];
$url='projects.php';

$sql="select * from users where smail='$mail'";
$result=mysqli_query($conn,$sql);
$respass=mysqli_fetch_assoc($result);
if($pass===$respass['spass'])
{
    header('Location: '.$url);
}
?>