<?php
$number = rand(4,9999);
$myname = 'Богдан';
$mysurname = 'Ангалейт';
$myage = 34;
$mycity = 'Москва';
$myemail = 'angaleit@gmail.com';
$myinfo = 'Работаю в IT компании. Люблю спорт, путешествия, читать.
Учусь на онлайн-курсах в Нетологии.';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Инфо карта</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        section{
            margin:auto;
            max-width: 70%;
            text-align: center;
        }
        
        section p{
            font-size: 21px;
            font-weight:600; 
        }

         section h1{
             color: blue;
        }

        ul{
            text-align:  left;
        }
    </style>
</head>

<body>
    <section>
<h1>Информационная карточка  '.$mysurname.' '.$myname.'а. Сегодня '.date('d.m.Y').'</h1>
<p>номер карточки - $number<p>
<ul>
    <li>Полное имя - <?=$mysurname." ".$myname;?></li>
    <li>Мой возраст - <?=$myage;?> года</li>
    <li>Город проживания - <?=$mycity;?></li>
    <li>E-mail - <?=$myemail;?></li>
    <li>Информация обо мне - <?=$myinfo;?></li>
</section>
</body>
</html>
