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
    <input type="file" name="Namef">
    <input type="submit" name="sub">
    </form>
    <pre>
    <?php 
      
       
            
        
            if(isset($_POST["sub"]))
            {
                $x=$_FILES['Namef']['name'];
                $y=$_FILES['Namef']['tmp_name'];
                $z=$_FILES['NameF']['error'];
                if($z > 0)
                {
                    echo "file loi";
                }
                else
                {
                    move_uploaded_file($y, 'upload/'.$x);
                    echo 'up load thanh cong';
                }

            }
           
     
    ?>
     <img src="<?php echo 'upload/'.$x;?>" alt="" style="max-width:30%;position:absolute;right:100px;">
<pre>
</body>
</html>