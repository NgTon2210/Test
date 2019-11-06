<?php
//header - chuyển hương trang
//đường dẫn tuyệt đối
//header('location:https://google.com.vn');

//đường dẫn tương đối
// ../ lùi 1 cấp
//header('location:../bai7.php');

//session
// bắt đầu phiên làm việc
//session_start();

//khởi tạo session
//$_SESSION['name'] = 'nguyễn văn tôn';

//lấy giá trị tron session
//echo $_SESSION['name'];

//xóa 1 session
//unset($_SESSION['name']);

//xóa tất cả session
//session_destroy(); //dùng cho logout

//header('location:thu_muc/vietpro.php');
//hang

//khai bao
//define('ten bien','gia tri')
define('pi',3.14);

//lấy giá trị
//echo constant('pi');

// kiểm tra  tồn tại của hằng
var_dump(defined('pi'));
 ?>