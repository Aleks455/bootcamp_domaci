<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "base_class.php";

if(!isset ($_POST ['ime_korisnik']) && !isset($_POST ['prezime_korisnik']) && !isset($_POST ['email_korisnik']) && !isset($_POST ['pass_korisnik']) && !isset($_POST ['adresa_korisnik'])) {
    echo "Molimo vas unesite sva polja";
} else {
    $ime_korisnika = $_POST ['ime_korisnik'];
    $prezime_korisnika = $_POST ['prezime_korisnik'];
    $email_korisnika = $_POST ['email_korisnik'];
    $password_korisnika = $_POST ['pass_korisnik'];
    $adresa_korisnika = $_POST ['adresa_korisnik'];

    $b->dodaj_korisnika ("$ime_korisnika", "$prezime_korisnika", "$email_korisnika", "$password_korisnika", "$adresa_korisnika");

} 
?>