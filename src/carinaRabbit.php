<?php

echo "hejsan hoppsan";
echo "tjosan hej Sav";
echo "weehooohaaaahoooooo";
echo "weehooo tjena carina";
echo "Hello Carina!";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        require __DIR__ . '/../vendor/autoload.php'; 
    $email = Email::fromString("carina@mail.se");// hämta variabel från en fil i mappen (utan att behöva include php-fil)
    var_dump($email);
    ?>
</head>
<body>
    
</body>
</html>

