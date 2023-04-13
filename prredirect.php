<?php
session_start();
include 'dbconn.php';

$_SESSION['prid']=$_POST['prid'];
$url='display.php';

header('Location: '.$url);
?>