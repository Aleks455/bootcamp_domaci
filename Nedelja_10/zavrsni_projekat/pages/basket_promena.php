<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "basket_class.php";
include "Proizvod.php";

if (isset ($_GET ['akcija']) && $_GET['akcija'] == 'dodaj') {
    $id_proizvoda = $_GET['id_proizvoda'];
    $proizvod = $b->daj_proizvod($id_proizvoda);
    $k->dodaj_proizvod_u_korpu ($id_proizvoda, $proizvod['cena'],1, 1);
}
if (isset ($_GET ['akcija']) && $_GET['akcija'] == 'smanji') {
    $id_proizvoda = $_GET['id_proizvoda'];
    $k->promeni_kolicinu_p_korpa ($id_proizvoda,-1);
}
if (isset ($_GET ['akcija']) && $_GET['akcija'] == 'obrisi') {
    $id_proizvoda = $_GET['id_proizvoda'];
    $k->obrisi_proizvod_korpa ($id_proizvoda);
}
header("Location: http://localhost/php_bootcamp/project/pages/basket.php")


?>