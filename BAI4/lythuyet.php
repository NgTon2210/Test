<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    ////////////////////phương thức post
    //$_post['thamso]
    //tham số của $_POST thuuowng là nae của ô input
    // làm viêc với post chúng ta luôn luôn kiêm tra submit
    // khi k nhập dữ liệu mà bấm submit, sẽ gửi đi null
    /*
    if(isset($_POST['sbm']))
    {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        echo $email.'<br/>'.$pass;
        //echo'xinchao'
    }
     ?>
     <form action="" method="post">
         <input type="email" name="email">
         <input type="password" name="pass">
         <input type="submit" name= "sbm">
    </form>
    */

    ////////////////////////////////files upload
    // $_FILES['thamso']['name']; //lấy đc tên của file upload
    // $_FILES['thamso']['size'];//lấy được kích cỡ file
    // $_FILES['thamso']['type'];// lấy ra kiểu file

    // $_FILES['tham_so']['error']; // lấy được file
    // $_FILES['thamso']['tmp_name'];//upload lên thư mục tạmm
    // move_uploaded_file($tmp_name,'uoload/anhdep.jpg');

    if(isset($_POST['sbm']))
    {
        $file_name = $_FILES['file_name']['name'];
        $tmp_name = $_FILES['file_name']['tmp_name'];
        $file_error = $_FILES['file_name']['error'];
        if($file_error > 0)
        {
            echo'file upload bi loi';
        }
        else
        {
            move_uploaded_file($tmp_name, 'upload/'.$file_name);
            echo'thanh cong';

            
        // }
    //    print_r($file_name);
    //    print_r($tmp_name);
    }
    ?>
    <!-- <img src="<?php echo 'upload/'.$file_name;?>" alt="" style="max-width:30%;position:absolute;right:100px;"> -->
    <form action="" method ="post" enctype="multipart/form-data">
        <input type="file" name="file_name"> <!--lam vic vs file thi type = "file" va phai co Enctype="multipart/form-data-->
        <input type="submit" name="sbm">
    </form>
</body>
</html>