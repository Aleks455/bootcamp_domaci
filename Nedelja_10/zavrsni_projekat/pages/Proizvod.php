<?php 
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
    <link type="text/css" rel="stylesheet" href="../styles/style_proizvodi.css">
    
    <link type="text/css" rel="stylesheet" href="../styles/styles_navigation_bar.css">
   
</head>
<body>

    <?php

        class Proizvod {
            public $id, $ime, $slika, $opis, $naslov, $cena, $grupa, $kategorija;
      
            function __construct($niz){
                $this->id = $niz ['id_proizvoda'];
                $this->ime = $niz ['ime'];
                $this->naslov = $niz ['naslov'];
                $this->cena = $niz ['cena'];
                $this->slika = $niz ['slika'];
                $this->grupa = $niz ['grupa'];
                $this->kategorija = $niz ['kategorija'];
            }

            function prikazi_proizvod(){
                echo "<div class='container'>";
                echo "<div class='proizvod_kutija'>";
                echo "<div class='div_slika_proizvoda'><a href='detaljnije.php?id=$this->id'><img class='slika_proizvoda' src='".$this->slika."' alt='slika'/></a></div>";
                echo "<p class='naslov_proizvoda'>$this->naslov</p>";
                echo "<p>$this->cena RSD</p>";
                echo "<form action='basket.php'>";
                echo "<input type='hidden' name='akcija' value='dodaj'>";
                echo "<input type='hidden' name='id_proizvoda' value='".$this->id."'>";
                echo "<div class='basket_icon_pict'>";
                echo "<input class='add_button' type='submit' value='Add to basket'></div>";
                echo "</div>";
                echo "</div>";
            }
            function prikazi_proizvod_detaljnije() {
                echo "<div class='container'>";
                echo "<img style='width:400px'  src='$this->slika' alt='slika'>";
                echo "<p>$this->naslov</p>";
                echo "<p>$this->cena RSD</p>";
                echo "<div class='basket_icon_pict'><a href='basket.php?id=$this->id'> Add to basket</a></div>";
                echo "<div><a href='page_index.php'> Back to products </a></div>";
                echo "</div>";
            }
        }
      
        class ListaProizvoda1 {
            public $proizvodi;

            function __construct () {
                $this->proizvodi = [];
            }

            function dodaj_proizvode ($podaci) {
                for ($i=0; $i<count ($podaci); $i++) {
                    $p = new Proizvod ($podaci[$i]);
                    array_push ($this->proizvodi, $p);
                }
            }
           
            function prikazi_sve_proizvode($grupa = "", $kategorija = "") {
                foreach ($this->proizvodi as $jedan_proizvod) {
                    
                    if (($grupa === NULL || $jedan_proizvod->grupa === $grupa)&& 
                    ($kategorija === NULL || $jedan_proizvod->kategorija === $kategorija)) {
                        $jedan_proizvod->prikazi_proizvod();
                    } 
                }
            }

            function prikazi_jedan_proizvod_detaljnije ($id) {
                for ($i=0; $i<count ($this->proizvodi); $i++) {
                    if ($this->proizvodi[$i]->id == $id) {
                        $this->proizvodi[$i]->prikazi_proizvod_detaljnije ();
                    }
                }
            }

            function meni ($proizvodi) {
                $sve_grupe = [];
                for ($i=0; $i<count ($proizvodi); $i++) {
                    $g = $proizvodi [$i]['grupa'];
                    if (array_search ($g, $sve_grupe) === false) {
                        array_push ($sve_grupe, $g);
                    }
                }
            }
        }
      
        include "base_class.php";
        $proizvodi = $b->daj_proizvode();
        
        $lp = new ListaProizvoda1();
        $lp->dodaj_proizvode($proizvodi); 
        
    ?>

</body>
</html>