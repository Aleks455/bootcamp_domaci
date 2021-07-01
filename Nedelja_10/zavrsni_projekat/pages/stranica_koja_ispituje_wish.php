<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_SESSION ['login_id'])) {
    header("Location: http://localhost/php_bootcamp/project/pages/log_in.php");
} elseif ($_SESSION ['login_id'] == 9) {
    header("Location: http://localhost/php_bootcamp/project/pages/admin_update_form.php");
} else {
    header("Location: http://localhost/php_bootcamp/project/pages/wish_list.php");
}
?>