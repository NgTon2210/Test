<?php
session_start();
if(isset($_SESSION['age']))
{
    $_SESSION['age']='11';
   
}
else{
    $_SESSION['age']='12';
}
echo $_SESSION['age'];