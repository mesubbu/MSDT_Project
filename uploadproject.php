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


$file=$_FILES['prfile'];
$fname=$_FILES['prfile']['name'];
$fsize=$_FILES['prfile']['size'];
$floc=$_FILES['prfile']['tmp_name'];
$ferror=$_FILES['prfile']['error'];

if($ferror === 0)
{
    if($fsize < 50000000)
    {
        $fextr=explode('.',$fname);
        $fext=strtolower(end($fextr));
        $accepted_ext=array('zip','rar','7z');

        if (in_array($fext,$accepted_ext)){
            $fnewname=$tlid.'.'.$fext;
            $fdest='uploadedfiles/'.$fnewname;
            move_uploaded_file($floc,$fdest);

            $sql="insert into projects (ptitle,pmname,pmid,pmmobile,pmbranch,stdname,stdid,stdmobile,stdbranch,pdesc,stdack) values ('$ptitle','$pmname','$pmid','$pmmobile','$pmbranch','$tlname','$tlid','$tlmobile','$tlbranch','$pdesc','$stdack');";
            mysqli_query($conn,$sql);

            header("Location: project.php?uploadsuccess");
        }
        else{
            echo "Invalid file type";
        }
    }
    else
    {
        echo "File size is $fsize. File size is too big. Upload file less than 50 mb";
    }
}
else
{
    echo "Error in uploading the file";
}
?>