<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Задание №2</title>
    <style>
     body{
            font-family: Arial, Helvetica, sans-serif;
        }
        section{
            margin:auto;
            max-width: 70%;
            text-align: center;
        }
    </style>
</head>

<body>
<section>
<form action="" name="" method="get" enctype="multipart/form-data">
<p>Введите число</p>
<p><input type="text"  name="number" /></p>
<p><input type="submit" name="OK" value="OK" /></p>
</form>
<?php
    $a = 1;
    $b = 1;
    if (isset($_GET['OK']))
    {
    $x = $_GET['number'];
    echo "Вы ввели число - $x<br>";
    while ($x){
    if ($a > $x) 
    {
        echo "Задуманное число НЕ входит в числовой ряд";
        break;
    }
    else if ($a == $x)
    { 
        echo "Задуманное число входит в числовой ряд";
        break;
    }
    else 
    {
        $c = $a;
        $a+=$b;
        $b = $c;
        /*echo "c = $c<br>";
        echo "a = $a<br>";
        echo "b = $b<br>";
        echo "========<br>";*/
    }
}
}
?>
<section>
</body>
</html>
