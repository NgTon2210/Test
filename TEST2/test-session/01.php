<?php 
session_start();
$_SESSION['name']='nguyen van ton';
$name = $_SESSION['name'];
echo $name;
?>