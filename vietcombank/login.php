<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-login.css">
</head>
<body>
    <?php
    if(isset($_POST['sbm']))
    {
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];
        {
            if($mail == "nguyenvanton@gmail.com" && $pass = "123456")
            {
                $_SESSION['mail'] = $mail;
                $_SESSION['pass'] = $pass;
                header('location:index.php');
            }
            else
            {
                $er = '<div class="login-ok">Đăng nhập thành công</div>';
            }
        }
    } 
     ?>
    <div class="login">
        <div class="container">
            <h3>HỆ THÔNG ĐĂNG NHẬP</h3>
            <?php if(isset($er)) echo $er; ?>
            <div class="login-form mt-3">
                <form role="form" method="post" style="width:500px">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="mail" type="email" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Mật khẩu" name="pass" type="password" value="">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Nhớ tài khoản
                            </label>
                        </div>
                        <button type="submit" name="sbm" class="btn btn-primary">Đăng nhập</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>
</html>