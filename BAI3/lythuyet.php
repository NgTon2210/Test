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
//     //phuonwng thức get
//     // cú pháp: $_GET ['THAMSO]/ biến toàn cục lưu trữ dưới đạng mảng bất tuần tự
//     //truyền tham số
//     //http://abc.com/index.php?tham_so1=gia_tri1&tham_so2=giatri2
//     //ví dụ thục thế
//     //truyền dữ liệu lên url rồi lấy get hứng dữ liệu từ url
//     /*
   if(isset($_GET['sbm'])) 
   {
    $user=$_GET['user'];
    $pass = $_GET['pass'];  
    echo $user.'<br/>'.$pass;
   }
//     ?>
//     <form action="" method="get">
//         <input type="text" name="user">
//         <input type="text" name="pass">
//         <input type="submit" name="sbm">
//     </form>
//     */

    //MẢNG
    // $array = array(bieu_thuc1, bieu_thuc2.....);
    // $array = [bieu_thuc1, bieu_thuc2...]
    //vidu
    // $array = ["mot"=>1,2,'ba','bon',true,5.5, 'van van'];
    // //foreach
    // foreach ($array as $key => $values)
    // {
    //     echo $key."=>".$values.'<br/>';
    // }

   

    //json->mang->php->json
    //JSON
    //đọc file json
    $data_json=file_get_contents('data.json');
    // chuyển file jon sang dạng mảng
    $result_json=json_decode($data_json, true);
    foreach ($result_json as $key => $values)
    {
        echo $values.'<br/>';
    }
    // chuyển json sang php
    $data_en_json=json_encode($result_json,JSON_UNESCAPED_UNICODE);
    //pull vào json
    file_put_contents('data.json',$data_en_json);
    ?>
</body>
</html>