<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        include_once ('proizvod.php');

        $proizvod1 = "Senka Metal";
        $slika1 = "<img src='SenkaMetal.png'>";
        $cena1 = 300;
        $popust1 = 3;

        pr ($proizvod1, $slika1, $cena1, $popust1);

        $proizvod1 = "Senka Nafis";
        $slika1 = "<img src='SenkaNafis.png'>";
        $cena1 = 200;
        $popust1 = 0;

        pr ($proizvod1, $slika1, $cena1, $popust1);

        $proizvod1 = "Ruz za usne";
        $slika1 = "<img src='ruz_za_usta.png'>";
        $cena1 = 500;
        $popust1 = 10;

        pr ($proizvod1, $slika1, $cena1, $popust1);

    ?>
</body>
</html>