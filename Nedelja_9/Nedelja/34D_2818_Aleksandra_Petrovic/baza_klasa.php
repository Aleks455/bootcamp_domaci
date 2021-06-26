<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Baza {

    public $conn;

    function __construct ($baza) {
        $this->conn = new mysqli ('localhost', 'root', '', $baza);

        if ($this->conn->connect_error)
            die ('Greska: '. $this->conn->connect_error);
        else
            echo 'Konektovan!';
    }
    
    function izvrsi_select ($upit) {
        $podaci = $this->conn->query($upit);
        if ($podaci === false)
            return ['uspesno'=>false, 'poruka'=>$this->conn->error];
        else {
            $niz = $podaci->fetch_all(MYSQLI_ASSOC);
            return ['uspesno'=>true, 'niz'=> $niz];
        }
    }

    function daj_destinaciju(){
        $r = $this->izvrsi_select("select * from destinacije");
        if($r['uspesno'] == true){
            return $r['niz'];
            // echo "Uspesan upit, broj redova je: ".count ($r ['niz']);

        }else{
            die ("Neuspesan upit: ".$r['poruka']);
        }
    }

    function prikazi_destinacije () {
        $r = $this->izvrsi_select("select putovanja.datum_polaska, putovanja.datum_povratka,destinacije.drzava, destinacije.grad from putovanja join destinacije on putovanja.destinacija_id=destinacije.id_destinacije");
        if ($r['uspesno'] == true) {
            return $r['niz'];
        } else {
            die ("Neuspesan upit: ". $r ['poruka']);
        }
    }

    function prikazi_putnike () {
        $r = $this->izvrsi_select("SELECT putnici.ime, destinacije.drzava, destinacije.grad, putovanja.datum_polaska, putovanja.datum_povratka FROM ((korpa_putovanja_po_osobi join putnici ON korpa_putovanja_po_osobi.osoba_pasos=putnici.br_pasosa) JOIN putovanja ON korpa_putovanja_po_osobi.id_putovanje=putovanja.id_putovanja) JOIN destinacije ON putovanja.destinacija_id=destinacije.id_destinacije");
        if ($r['uspesno'] == true) {
            return $r['niz'];
        } else {
            die ("Neuspesan upit: ". $r ['poruka']);
        }
    }


    function izvrsi_upit($upit){
        $odg = $this->conn->query($upit);
        if($odg === false) {
            die('Nije izvrsen upit: ' . $this->conn->error);
        } else {
            //$id = $this->conn->insert_id; //ako postoji A_I
            //echo 'Insertovan red sa ID: '.$id;
            //return $id;

            echo "Uspesno izvrsen upit!";
            //echo "Uspesno obrisana rezervacija!";
        }
            
    }

    function otkazi_rezervaciju ($osoba_pasos) {
        $r = $this->izvrsi_upit ("DELETE FROM korpa_putovanja_po_osobi WHERE osoba_pasos=$osoba_pasos");
        if ($r['uspesno'] == true) {
            // return $r['niz'];
        } else {
            // die ("Neuspesan upit: ". $r ['poruka']);
        }
    }

}

$b = new Baza ('turisticka_agencija');




?>
