<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="box">
        <a href="test.php?test=values1" >click1</a>
         <a href="test.php?test=values2"> click2</a>
    </div>
    <div class="contain">
   
        <div class="contain1">
        <?php 
            if(isset($_GET["test"]))
            {
                $test = $_GET["test"];
                switch($test)
                {
                    case 'values1':
                    {
                        include 'values/values1.php';
                        break;
                    }
                    case 'values2':
                    {
                        include 'values/values2.php';
                        break;
                    }
                
                }

            }
            ?>
        </div>
        <div class="contain2">
        <?php 
            if(isset($_GET["test"]))
            {
                $test = $_GET["test"];
                switch($test)
                {
                    case 'values1':
                    {
                        include 'values/values1.php';
                        break;
                    }
                    case 'values2':
                    {
                        include 'values/values2.php';
                        break;
                    }
                
                }

            }
            ?>
        </div>
       
    </div>
</body>
</html>