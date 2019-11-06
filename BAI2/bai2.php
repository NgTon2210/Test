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
    // $a= 0;
    // if($a==0)
    // {
    //     echo "a = 0";
    // }



    /*
    $a = 1;
    $b = 2;
    if($a != 3 && $b != 3 )
    {
        echo ' sai';
    }
    else
    {
        echo 'dung';
    }
    */


    /*
    $m = 2;
    for( $i =1 ; $i <= 3; $i++)
    {
        if($m == $i)
        {
            echo ' so do la:'.$i;
        }
        else if ($m == 0)
        {
            echo 'dung';
        }
        else
        {
            echo ' k co ket qua';
        }
    }
   */


   //vong lap white

//    $i = 5;
//    while($i < 10)
//    {
//        echo $i.',';
//        $i++;

//    }

//    $i = 10;
//    while ($i >0)
//    {
     
//        if($i > 1)
//        {
//            echo $i.",";
//        }
//        else
//        {
//            echo $i.".";
//        }
//        $i--;
//    }
/* $a = 0;
for ($i=1; $i<=100; $i++)
{
    $a=$a + $i;
    
}
echo $a;
    
*/



/*for($a=1 ; $a<=9; $a++)
{
    for($b=1; $b<=10; $b++)
    {
        echo $b.'* '.$a .'=';
        echo $a*$b;
        echo ',';
       
       
    }
    echo '<br>';
}
*/

/*
$a = 1;
$b = 2;
$c = 3;
$d = 5;
$e = 4;
$max = 0;
if($b > $max)
{
     $max = $b;
  
}
if($c > $max)
{
     $max = $c;

}
 if($d > $max)
{
     $max = $d;
  
}
 if($e > $max)
{
     $max = $e;
  
}
 if($a > $max)
{
     $max = $a;
    
}

echo 'max='.$max;
*/

/*
$a = 10;
for ($i = 0; $i <= $a; $i++)
{
    echo $i;
}
*/

$tong = 0;
for($i = 0; $i<=10; $i+=2)
{
    $tong = $tong + $i;
}
echo $tong.'<br>';

$tongle = 0;
for($i = 1; $i<=10; $i+=2)
{
    $tongle = $tongle + $i;
}
echo $tongle;
?>
</body>
</html>