<?php

include 'dbconn.php';

$ptitle=$_POST['ptitle'];
$pmname=$_POST['pmname'];
$pmid=$_POST['pmid'];
$pmmobile=$_POST['pmmobile'];
$pmbranch=$_POST['pmbranch'];
$tlname=$_POST['tlname'];
$tlid=$_POST['tlid'];
$tlmobile=$_POST['tlmobile'];
$tlbranch=$_POST['tlbranch'];
$pdesc=$_POST['pdesc'];
$stdack=$_POST['stdack'];

$sql="insert into projects (ptitle,pmname,pmid,pmmobile,pmbranch,stdname,stdid,stdmobile,stdbranch,pdesc,stdack) values ('$ptitle','$pmname','$pmid','$pmmobile','$pmbranch','$tlname','$tlid','$tlmobile','$tlbranch','$pdesc','$stdack');";
mysqli_query($conn,$sql);
echo "Project uploaded successfully.";
?>