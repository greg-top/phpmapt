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
This should display 'A' in ASCII ==> &#65;
</body>
</html>

<?php

$text = 'bed';

echo strlen($text); //3

$text = 'ベッド'; //bed in japanese - 3 characters

echo strlen($text); //9 because each character in UNICODE has 3 bytes so 3*3 = 9

//to fix that

echo mb_strlen($text); //3