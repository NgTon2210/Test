<?php 

if(defined('SECURITY'))
{
	die('ban khong co quyen');
}
if(isset($_GET['st']))
{
    $sty = $_GET['st'];
}
else
{
    $sty = 'style';
}
if(isset($_GET['language']))
{
    $language = $_GET['language'];
}
else
{
    $language = 'vi';
}
$data_json=file_get_contents($language.'.json');
$ketqua = json_decode($data_json,true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/<?php echo $sty?>.css">
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.4.1.js"></script>
</head>
<body>
    <header>
        <div class="container">
            <div class="menu">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logout mt-3" style="width:65px;padding:5px;border:1px solid gray; border-radius:50% 50%;text-align:center;">
                            <a href="logout.php" style="color:black;"><span>Đăng Xuất</span></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="menu-search">
                            <div class="menu-top">
                                <nav>
                                    <ul>
                                        <li><a href="index.php?st=style"><?php echo $ketqua["menu1"] ?></a></li>
                                        <li><a href="index.php?st=style2"><?php echo $ketqua["menu2"] ?></a></li>
                                        <li><a href="index.php?st=style3"><?php echo $ketqua["menu3"] ?></a></li>
                                        <li><a href="index.php?st=style4"><?php echo $ketqua["menu4"] ?></a></li>
                                        <li><a href="index.php?st=style5" style="border:none"><?php echo $ketqua["menu5"] ?></a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="search-language">
                               <div class="search">
                                   <form></form>
                                       <input type="text" name="search" placeholder="Search..">
                                   </form>
                                   
                               </div>
                               <div class="language">
                                   <a href="index.php?language=en"><img src="img/icon-EN.png" alt=""></a>
                                   <a href="index.php?language=vi"><img src="img/icon-VN.png" alt=""></a>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="logo-customer">
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>

    </section>
    <footer>

    </footer>
</body>
</html>