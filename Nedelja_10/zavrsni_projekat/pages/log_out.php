<?php
    session_start();
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    unset($_SESSION['login_id']);
    setcookie('login_id', 0, time()-60*60*24, "/");
    header("Location: http://localhost/php_bootcamp/project/pages/log_in.php");
    ?>