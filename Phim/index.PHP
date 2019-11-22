<?php 
if(isset($_GET['language']))
{
    $language = $_GET['language'];
}
else
{
    $language = 'vi';
}
$data_json=file_get_contents($language.'.json');
$kq = json_decode($data_json, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nguyễn Văn Tôn</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <div class="logo-search">
                <div class="row">
                    <div class="col-lg-4-fluid col-md-6 ">
                        <div class="logo">
                            <h1>
                                <a href=""><img src="img/galaxy-logo.png" alt="" class="" style="width: 396px;"></a>
                            </h1>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="search mt-3 pl-5">
                            <form action="">
                                <div class="search1">
                                    <input type="text" placeholder="<?php echo $kq['js1']?>" style="border: none;width: 100%;">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="ml-auto">
                        <div class="login">
                            <a href=""><i class="fas fa-user" style="color: gray;"></i> </a>
                            <span class="lg"><a href=""><?php echo $kq['js2']?></a></span>
                            <span class="vn"><a href="index.php?language=vi" style="color: red;">VN</a></span>
                            <span class="en"><a href="index.php?language=en">EN</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--end logo-search-->
        </div>
        <div class="menu">
            <div class="container">
                <nav>
                    <ul>
                        <li><a href=""><?php echo $kq['js3']?></a></li>
                        <li><a href=""><?php echo $kq['js4']?></a><i class="fas fa-caret-down" style="color: white;margin-left: 5px;"></i>
                        </li>
                        <li><a href=""><?php echo $kq['js5']?></a><i class="fas fa-caret-down"
                                style="color: white;margin-left: 5px;"></i></li>
                        <li><a href=""><?php echo $kq['js6']?></a><i class="fas fa-caret-down"
                                style="color: white;margin-left: 5px;"></i></li>
                        <li><a href=""><?php echo $kq['js7']?></a></li>
                        <li><a href=""><?php echo $kq['js8']?></a></li>
                        <li style="border: none;"><a href=""><?php echo $kq['js9']?></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--end-menu-->

    </header>
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/sl1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/sl2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/sl3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--end slide-->
        <div class="container">
            <div class="film">
                <div class="film-now">
                    <div class="h3-now-will" style="display: flex;">
                        <h3 class="now"><a href="" class="h3"><?php echo $kq['js10']?></a></h3>
                        <h3 class="will"><a href="" class="h3"><?php echo $kq['js11']?></a></h3>
                    </div>
                    <div class="row ">
                        <div class="col-lg-4 ">
                            <a href=""><img src="img/p1.jpg" alt="" class="film-img"></a>
                            <h4><a href="">TERMINATOR: DARK FATE</a></h4>
                            <p>
                                <?php echo $kq['js12']?>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <a href=""><img src="img/p2.jpg" alt="" class="film-img"></a>
                            <h4><a href="">BẮC KIM THANG</a></h4>
                            <p>
                                <?php echo $kq['js13']?>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <a href=""><img src="img/p3.jpg" alt="" class="film-img"></a>
                            <h4><a href="">ZOMBIELAND: DOUBLE TAP</a></h4>
                            <p>
                                <?php echo $kq['js14']?>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <a href=""><img src="img/p1.jpg" alt="" class="film-img"></a>
                            <h4><a href="">TERMINATOR: DARK FATE</a></h4>
                            <p><?php echo $kq['js12']?>
                                </p>
                        </div>
                        <div class="col-lg-4">
                            <a href=""><img src="img/p2.jpg" alt="" class="film-img"></a>
                            <h4><a href="">BẮC KIM THANG</a></h4>
                            <p>
                                <?php echo $kq['js13']?>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <a href=""><img src="img/p3.jpg" alt="" class="film-img"></a>
                            <h4><a href="">ZOMBIELAND: DOUBLE TAP</a></h4>
                            <p>
                                <?php echo $kq['js14']?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 pull-right">
                    <a href="" class="float-left"><span><?php echo $kq['js15']?> </span><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

    </section>
</body>

</html>