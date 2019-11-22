<?php 
$namesever = 'localhost';
$user = 'root';
$pass = null;
$database = 'testmysql';
$query ='';
$conn = mysqli_connect($namesever,$user,$pass,$database);// khởi tạo kết nối
if($conn) // kiểm tra kết nối
{
    mysqli_query($conn, "SET NAMES 'utf8'");
    echo ' Kết nối database thành công';
}
else
{
    die('kết nối rít');
}

$sql = "select * from xe";
$query = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($query))
{
    echo '<br/>';
    echo $row['id_Xe'].'<br/>';
    echo $row['TenXe'].'<br/>';
    echo $row['GiaTien'].'<br/>';
    echo $row['GhiChu'].'<br/>';
    echo '<hr/>';
}
?>