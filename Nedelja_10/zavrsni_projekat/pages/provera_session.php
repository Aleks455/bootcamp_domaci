<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (!isset ($_SESSION ['login_id'])) {
    echo "<div> <a href='Log_in.php> Log in </a></div>";
    echo "<div> <a href='page_first.php'> Back to main page </a> </div>";
} else {
    echo "Uspesno logovanje";
}
?>
