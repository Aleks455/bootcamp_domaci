<?php
session_start ();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// include "header1.php";
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

    if(!isset ($_SESSION['login_id'])) {
    ?>
        <div class="log_in_container">
            <form class="log_in_forma" action="get_log_in.php" method="GET">
                <input type="email" name="email_korisnik" id="email_korisnik" placeholder="Your email">
                <input type="text" name="pass_korisnik" id="pass_korisnik" placeholder=" Your password">
                <input type="submit" name="posalji_korisnika" id="posalji_korisnika" value="Log In">
                <br>
                <input type="checkbox" name="zapamti" class="checkbox"> <span class="checkbox_span"> Check to stay loged in </span>
            </form>
            <div class="sign_up_div">
                <p id="sign_up_now">You don't have an account yet?</p>
                <a href="sign_up.php"><button>Sign Up</button></a>
            </div>
        </div>
    <?php
    } else {
        header("Location: http://localhost/php_bootcamp/project/pages/profil_korisnika.php");
    }
    ?>

   
</body>
</html>