<?php

// 5 câu lệnh bổ trợ cho select
// 1.Where 
//       vd: lấy ra tất cả các thành viên ở Hà Nội: select *from thanhvien  Where address = 'Ha Noi'
//2+3. AND-OR 
//      vd:  lấy ra tất cả các thành viên ở hà nội sinh năm 2000:select * from thanhvien Where address='hanoi' and birthday >= '2000-01-01' and birthday <='2000-12-31'
//4. ODER BY (sắp xếp theo thứ tự): tăng dần(ASC)/ giảm dần (DESC)
//      vd:lấy ra thứ tự tành viên mới đăng kí: select * from thanhvien order by user_id DESC
//5.LIMIT( giới hạn số bản ghi hiển thị)
//      vd: lấy ra 5 sản phẩm mới nhất và giới hạn 5 sản phẩm: select * from produce order by product_id DESC limit 5


//KẾT NỐI BẢNG: INNER JOIN vd:Select * from product INNER JOIN category ON product.cat_id=category.cat_id
?>
