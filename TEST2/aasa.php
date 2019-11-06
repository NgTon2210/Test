<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="" enctype="multipart/form-data">
    <input type="file" name="Namef">
    <input type="submit" name="sub">
    </form>
    <pre>
    <?php 
      
       
            $x=$_FILES["Namef"];
            echo $x;
     
    ?>
<pre>
</body>
</html>