<?php

$fname=$_POST['fileid'];
echo $fname;
$url='uploadedfiles/'.$fname.'.zip';

header('Location: '.$url);
?>