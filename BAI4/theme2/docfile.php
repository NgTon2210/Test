<?php
//bước 1:
$file_name = $_GET['file_name']; //dùng get để hứng
$file_path = 'upload/'.$file_name; // mở file
//bước 2:thông báo tải file
// header("Content-disposition: attachment; filename= $file_name"); //tải xuống
//buowcs3: trình duyệt trả về định dạng file
header("Content-type: application/pdf");
//bước 4: đọc file
readfile("$file_path");
?>