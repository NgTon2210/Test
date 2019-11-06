<?php 
$x = $_FILES["Name-file"]["name"];
echo $x;
move_uploaded_file($_FILES["Name-file"]["tmp_name"],"upload/$name")
?>
