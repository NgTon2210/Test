<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <form action="" method="POST" style="width: 400px;">
       <input type="username" name="user" placeholder="nhập tên"><br>
       <input type="password" name="pass" placeholder="nhập mk"><br>
       <input type="submit" name="sub">
   </form>
   <?php 
if(isset($_POST["sub"]))
{
    $user = $_POST["user"]."<br>";
    $pass =  $_POST["pass"]."<br>";
    echo $user."<br>".$pass;
}
?>
</body>
</html>