<?php 
session_start();
if(isset($_SESSION['name']))
{
    echo 'da ton tai';
}
else
{
    echo 'chua ton tai';
}