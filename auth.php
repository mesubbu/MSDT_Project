<?php
session_start();
include 'dbconn.php';

$mail=$_POST['smail'];
$pass=$_POST['spass'];
$url='project.php';

$sql="select * from users where smail='$mail'";
$result=mysqli_query($conn,$sql);
$res=mysqli_fetch_assoc($result);
if($pass===$res['spass'])
{
    $_SESSION["id"]=$res['sid'];
    $_SESSION["name"]=$res['sname'];
    header('Location: '.$url);
}
?>