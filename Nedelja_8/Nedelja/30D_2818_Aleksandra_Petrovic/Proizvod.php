<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stil.css">
   
</head>
<body>

    <?php

        class Proizvod {
            public $id, $ime,$slika,$opis,$naslov, $cena, $grupa;
      
            function __construct($niz){
                //['id'=>100, 'ime'=>'Cokolada100g', 'naslov'=>"Cokolada 100 grama ima sa lesnicima", 'cena'=>100, 'slika'=>'coko.jpg', 'opis'=>'1'  Ovo je neki bas duzi opis .]
                $this->id = $niz ['id'];
                $this->ime = $niz ['ime'];
                $this->slika = $niz ['slika'];
                $this->opis = $niz ['opis'];
                $this->naslov = $niz ['naslov'];
                $this->cena = $niz ['cena'];
                $this->grupa = $niz ['grupa'];
            }

            function prikazi_proizvod(){
                echo "<div class='container'>";
                echo "<div class='proizvod_kutija' >";
                echo "<h2 class='naslov_proizvoda'>$this->naslov</h2>";
                echo "<div style='border:2px solid  white; width:390px' ><img style='width:200px' src='".$this->slika."' alt='slika'/></div>";
                echo "<a href='detaljnije.php?id=$this->id'>Detaljnije</a>";
                // echo "<p>$this->grupa</p>";
                echo "</div>";
                echo "</div>";
            }
            function prikazi_proizvod_detaljnije() {
                echo "<div class='container'>";
                echo "<h2>$this->naslov</h2>";
                echo "<img style='width:400px'  src='$this->slika' alt='slika'>";
                echo "<p>$this->opis</p>";
                echo "<p>$this->cena</p>";
                // echo "<p>$this->grupa</p>";
                echo "</div>";

            }
           
        }
      
        


        class ListaProizvoda1 {
            public $proizvodi = [];

            function __construct ($podaci) {
                $this->proizvodi = [];
               

            }

            function dodaj_proizvode ($podaci) {
                for ($i=0; $i<count ($podaci); $i++) {
                    $p = new Proizvod ($podaci[$i]);
                    array_push ($this->proizvodi, $p);
                }
            }

            function prikazi_sve_proizvode () {
                for ($i=0; $i<count ($this->proizvodi); $i++) {
                    $this->proizvodi[$i]->prikazi_proizvod ();
                }
            }

            function prikazi_jedan_proizvod_detaljnije ($id) {
                for ($i=0; $i<count ($this->proizvodi); $i++) {
                    if ($this->proizvodi[$i]->id == $id) {
                        $this->proizvodi[$i]->prikazi_proizvod_detaljnije ();
                    }
                }
            }
        }

        class WebSite {
            // public $lista_proizvoda;

            function __construct () {
                // $this->lista_proizvoda = new ListaProizvoda1 ();
            }

            function header () {
                echo  "<div style='height:100px; background-color:skyblue; text-align:center'><h1 class='naslov'><a href='index.php'>Dobro dosli u web-shop</a></h1></div>";
            }

            function footer () {
                echo  "<div style='clear:both ;height:100px; background-color:skyblue; text-align:center'><h1>Bolje vas nasli</h1></div>";
            }

            function meni ($podaci) {
                $sve_grupe = [];
                for ($i=0; $i<count ($podaci); $i++) {
                    $g = $podaci [$i]['grupa'];
                    if (array_search ($g, $sve_grupe) === false) {
                        array_push ($sve_grupe, $g);
                    }
                }
                echo "<div class='lista'>";
                for ($i=0; $i<count ($sve_grupe); $i++) {
                    echo "<ul>
                    <a href='index.php?grupa=$sve_grupe[$i]'> <li>$sve_grupe[$i]</li></a>     
                    </ul>";
                }
                echo "</div>";
                    
                
            }
        }

        include "podaci.php";
        $lp = new ListaProizvoda1($podaci);
        $lp->dodaj_proizvode ($podaci);

      

    ?>

</body>
</html>