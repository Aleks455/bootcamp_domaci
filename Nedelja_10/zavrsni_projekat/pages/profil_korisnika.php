<?php
session_start ();
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
    <link rel="stylesheet" href="../styles/style_profil_korisnika.css">

</head>  

<body>
    <?php
        include "header1.php";
    ?>
    <div class="div_container">
        <!-- da uzmem i prikaze u tabeli njegove podatke, a potom da stavim opciju da moze da ih promeni -->

        <div> Profil </div>

        <!-- Videti kako da se izlogujem  -->
        <button> <a href="log_out.php"> Izlogujte se </a></button>


        <!-- <form action="get_podatke_korisnika.php">  -->
            <!-- INFORMACIJE O KORISNIKU IZ TABELE KOJE MOZE NA DUGME "PROMENI" DA MENJA; -->
        <!-- </form> -->
    </div>
</body>
<a href=""></a>
</html>