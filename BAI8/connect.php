<?php 
//////////////////lấy ra data trong sql có ba bước
//bước 1:kết nối data
$connect = mysqli_connect('localhost','root','','hocphpk177');
if($connect)
{
    mysqli_query($connect, "SET NAMES 'utf8'");// giá trị kết nối
    print_r('kết nỗi thành công');
}
else
{
    die('kết nối thất bại');
}

////////// bước 2: viết câu lệnh và thực thi
$sql = "select * from thanhvien";
$query = mysqli_query($connect,$sql);


//////////bước 3 lấy ra bản ghi row
//hàm đếm kết quả truy vấn
 //$num_rows= mysqli_num_rows($query);
 //echo $num_rows
 // ham lấy ra sô bản ghi trong table
   //$row = mysqli_fetch_assoc($query); //hàm này nhận kết quả thực thi truy vấn và nó trả về 1 mảng chứa toàn bộ dữ liệu của chúng ta
 //key là cột dữ liệu, values là dữ liệu trong bản ghi
 //echo $row['name_ds']; lấy ra đc 1 giá trị

 //sử dụng vong lặp white để lấy ra tất cả ban ghi
 while($row = mysqli_fetch_assoc($query))
 {
     echo '<br/>';
     echo $row['id_ds'].'<br>';
     echo $row['name_ds'].'<br>';
     echo $row['address_ds'].'<br>';
     echo $row['phone'].'<br>';
     echo '<hr/>';
 }
?>

