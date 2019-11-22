<?php 
$namesever = "localhost";
$user = "root";
$pass = "";
$database = "PHPK177";
$conn = mysqli_connect($namesever,$user,$pass,$database);
if($conn)
{
    mysqli_query($conn, "SET NAMES 'utf8'");// giá trị kết nối
    print_r('kết nỗi thành công');
}
else
{
    die('keet noi that bai');
    include_once('../admin/index.php');
}
?>