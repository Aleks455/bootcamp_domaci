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
    <link rel="stylesheet" href="../styles/style_log_in.css">
</head>
<body>
    <?php
    include "header1.php";
    ?>
    <div class="log_in_container">
        <form class="log_in_forma" action="get_sign_up.php" method="POST">
            <input type="text" name="ime_korisnik" id="ime_korisnik" placeholder="Your first name">
            <input type="text" name="prezime_korisnik" id="prezime_korisnik" placeholder="Your last name">
            <input type="email" name="email_korisnik" id="email_korisnik" placeholder=" Your email">
            <input type="text" name="pass_korisnik" id="pass_korisnik" placeholder=" Your password">
            <input type="text" name="adresa_korisnik" id="adresa_korisnik" placeholder=" Your address">
            <input type="submit" name="posalji_korisnika" id="posalji_korisnika" value="Sign Up">
        </form>
    </div>
</body>
</html>