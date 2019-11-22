<?php 
// select * from product limit 5 
// Trang1: 1-5 va key 0-4 Select * from product limit 0,5 
// Trang2:6-10 key:5-9 select *from product limit 5,5 
// Trang N la ($page)
 
// cong thuc phan trang 
// $per_row = $page*$rows_per_page - $row_per_page;
// bấm trang 1: 1*3-3=0
// bấm trang 2: 2*3-3 =3 
// bấm trang 3: 3*3 - 3=6
// => tìm đc $per_row  và chỉ còn $page là phải tìm 
// $page = $_GET['page']; -->
