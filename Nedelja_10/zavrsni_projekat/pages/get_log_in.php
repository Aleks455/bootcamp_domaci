<?php 
session_start ();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include "base_class.php";

if(!isset($_GET ['email_korisnik']) || !isset($_GET ['pass_korisnik'])) {
    header("Location: http://localhost/php_bootcamp/project/pages/log_in.php");
} elseif (isset($_GET ['email_korisnik']) && isset($_GET ['pass_korisnik'])) {
    $email = $_GET ['email_korisnik'];
    $password = $_GET ['pass_korisnik'];
}
if(isset ($_GET ['zapamti'])) {
    $zapamti = $_GET ['zapamti'];
}

// $korisnik = $b->daj_korisnika ($email, $password);
// echo $korisnik;
// RADILO POLOVICNO
// $korisnik1 = $b->daj1_korisnika ($email, $password);
// echo $korisnik1;

$baza = new mysqli ('localhost', 'root', '', 'projekat');
$podaci = $baza->query ("SELECT id_kupca FROM `kupac` WHERE email='$email' and pass='$password' ");
if($podaci===false) {
    // ne radi
    echo "Ne postoje podaci u useru";
    exit;
}
$niz = $podaci->fetch_all(MYSQLI_ASSOC);

if (count($niz) === 0) {
    echo "Niste pravilno uneli email i/ili password!";
    echo "<div><a href='log_in.php'> Uloguj se </a></div>";
    echo "<div><a href='page_first.php'> Vrati se na pocetnu stranicu </a></div>";
    exit;
} 
$id = $niz [0]['id_kupca'];
echo "Uspesno izvrseno logovanje. ID je ". $id;

if ($zapamti == false ) {
    $_SESSION ['login_id'] = $id;
} else {
    setcookie('login_id', $id, time()+60*60*24*30*10, "/");
}

if ($_SESSION ['login_id'] == 9) {
    header("Location: http://localhost/php_bootcamp/project/pages/admin_update_form.php");
} else {
    header("Location: http://localhost/php_bootcamp/project/pages/page_index.php");
}

?>
