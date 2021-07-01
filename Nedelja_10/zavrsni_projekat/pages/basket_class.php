<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    if (!isset ($_SESSION['stavke_korpe'])) {
        $_SESSION ['stavke_korpe'] = [];
    }

    class Korpa {
        public $stavke_korpe;
    
        function __construct(){
            $this->stavke_korpe = $_SESSION['stavke_korpe'];   
        }

        function dodaj_proizvod_u_korpu ($id_proizvoda, $cena, $kolicina) {
            $nasao = false;
            for ($i=0; $i<count ($this->stavke_korpe); $i++) {
                if ($this->stavke_korpe[$i]['id_proizvoda'] == $id_proizvoda) {
                    $this->promeni_kolicinu_p_korpa($id_proizvoda, $kolicina);
                    $nasao = true;
                    break;
                }
            }
            if ($nasao == false) {
                $nova_stavka = ['id_proizvoda'=>$id_proizvoda, 'cena'=>$cena, 'kolicina'=>$kolicina];
                array_push($this->stavke_korpe, $nova_stavka);
            }
            $_SESSION ['stavke_korpe'] = $this->stavke_korpe;
            
        }
        function prikazi_proizvode_korpa () {
            echo "<table border='1'>";
            $s=0;
            // echo "<tr><td> ID proizvoda </td><td> Cena </td><td> Kolicina </td><td> Popust </td></tr>";
            for ($i=0; $i<count ($this->stavke_korpe); $i++) {
                $u = $this->stavke_korpe [$i] ['cena'] * $this->stavke_korpe[$i] ['kolicina'];
                $s += $u;
                echo "<tr>";
                echo "<td>".$this->stavke_korpe[$i]['id_proizvoda']."</td>";
                echo "<td>".$this->stavke_korpe[$i]['cena']." RSD </td>";
                echo "<td>".$this->stavke_korpe[$i]['kolicina']."</td>";
                echo "<td>".$u."%</td>";
                echo "<td> <a href='basket_promena.php?akcija=dodaj&id_proizvoda=".$this->stavke_korpe[$i]['id_proizvoda']." '><button style='font-size:2em'>+</button></a></td>";
                echo "<td><a href='basket_promena.php?akcija=smanji&id_proizvoda=".$this->stavke_korpe[$i]['id_proizvoda']."'><button style='font-size:2em'>-</button></a></td>";
                echo "<td><a href='basket_promena.php?akcija=obrisi&id_proizvoda="
                    .$this->stavke_korpe[$i]['id_proizvoda']."'>OBRISI</a></td>";
                echo "</tr>";
            }
            echo "<tr><td colspan='3' style='text-align:right'>UKUPNO:</td><td>$s</td></tr>";
            echo "</table>";
        
            $_SESSION ['stavke_korpe'] = $this->stavke_korpe;

        }
        function promeni_kolicinu_p_korpa ($id_proizvoda, $kol ) {
            for ($i=0; $i<count($this->stavke_korpe); $i++) {
                if ($this->stavke_korpe[$i]['id_proizvoda'] == $id_proizvoda) {
                    $this->stavke_korpe[$i]['kolicina']+=$kol;
                    if ( $this->stavke_korpe[$i]['kolicina']<=0) {
                        $this->obrisi_proizvod_korpa($id_proizvoda);
                    }
                    break;
                }
            }
            $_SESSION ['stavke_korpe'] = $this->stavke_korpe;
        }
        function obrisi_proizvod_korpa ($id_proizvoda) {
            for ($i=0; $i<count ($this->stavke_korpe); $i++) {
                if ($this->stavke_korpe[$i]['id_proizvoda'] == $id_proizvoda)
                array_splice($this->stavke_korpe, $i,1);
                break;
            }
            $_SESSION ['stavke_korpe'] = $this->stavke_korpe;
        }
    }

    $k = new Korpa ();
    // $k->dodaj_proizvod_u_korpu (1, 432, 2323, 2, 5);
    // $k->dodaj_proizvod_u_korpu (2, 433, 523, 3, 10);
    // $k->dodaj_proizvod_u_korpu (3, 523, 523, 5, 10);

    // $k->prikazi_proizvode_korpa ();
    // $k->promeni_kolicinu_p_korpa(432, 10);
    // $k->obrisi_proizvod_korpa(433);
    // $k->prikazi_proizvode_korpa ();

    


?>