<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="km" placeholder="Nhap km">
   <button type="submit">Tinh</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD" ]== 'POST'){
    $km = $_POST["km"];
    if($km>0&& $km<2){
        echo $km*15000 ."VND";
    }else if($km>=2&&$km<=5){
        echo 15000 + ($km-1) *13500 ."VND";
    }else if($km>5&&$km<120){
        echo (15000 + (4 *13500))+($km-5)*11000 ."VND";
    }else if($km>120){
        echo ((15000 + 4 *13500)+($km-5)*11000)*0.9;
    }
}

