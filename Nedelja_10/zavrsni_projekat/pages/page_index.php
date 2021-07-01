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
    <link type="text/css" rel="stylesheet" href="../styles/style_page_index.css">


</head>
<body>

    <?php

        include 'header1.php';
        echo "<div class='main_proizvodi_container'>".
        include 'Proizvod.php';
    
        $kategorija = $_GET['kategorija']?? NULL ; 
        $grupa = $_GET['grupa']?? NULL;
        
       
        echo "<div class='container_proizvodi'>";
        $lp->prikazi_sve_proizvode($grupa, $kategorija);

        
        echo "</div>"; 

        include "footer.php";

  
    ?>

</body>
</html>