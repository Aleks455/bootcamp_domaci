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
</head>
<body>
    <?php

        include 'header1.php';


        if(!isset($_GET['id'])) {
            die("Trazite nepostojecu stranicu!");
        }
        $id = $_GET ['id'];
        include 'Proizvod.php';
     
        echo "<div class='detaljnije'>";
        $lp->prikazi_jedan_proizvod_detaljnije($id);
        echo "</div>";
    
        include "footer.php";
     




    
    ?>
</body>
</html>