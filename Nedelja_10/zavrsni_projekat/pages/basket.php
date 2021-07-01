<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="../styles/style_basket.css">
</head>
<body>
    <?php
    include 'header1.php';

    ?>
    <div class='basket_container'>

    

        <?php
            include 'basket_class.php';
            $k->prikazi_proizvode_korpa();

        ?>


        <button><a href='snimi_korpu.php'> Zavrsi kupovinu </button></button>
        <button><a href='page_index.php'>Vrati se na proizvode </button></button>
    </div>
    
</body>
</html>