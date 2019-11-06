<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
       <input type="file" name="file">
       <input type="submit" name="sub">
   </form>
   <?php
   if(isset($_POST['sub']))
   {
       if($_FILES['file']['error']>0)
       {
           echo 'file lỗi';
       }
       else
       {
           move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$_FILES['file']['name']);
           echo 'upload thanhh cong';
            echo '<pre>';
            print_r($_FILES['file']);
            echo '<pre>';
            $st = "upload/".$_FILES['file']['name'];
            echo "<br><a href='$st'> dowload</a>";
           
       }
   }
    
    ?>
     
</body>
</html>