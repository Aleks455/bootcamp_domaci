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

    function daj_proizvode(){
        $r = $this->izvrsi_select("SELECT * FROM `proizvodi`");
        if($r['uspesno'] == true){
            return $r['niz'];
        }else{
            die ("Neuspesan upit: ".$r['poruka']);
        }
    }
    function daj_proizvod ($id){
        $r = $this->izvrsi_select("SELECT * FROM `proizvodi` WHERE id_proizvoda='$id'");
        if($r['uspesno'] == true){
            return $r['niz'][0];
        }else{
            die ("Neuspesan upit: ".$r['poruka']);
        }
    }
    function izvrsi_upit($upit){
        $odg = $this->conn->query($upit);
        if($odg === false) {
            die('Nije izvrsen upit: ' . $this->conn->error);
        } else {
            return ['uspesno'=>true];
            echo "Uspesno izvrsen upit!";
        }
            
    }

    function dodaj_proizvod ($id, $ime, $naslov, $cena, $slika, $grupa, $kategorija) {
        $id = $this->conn->real_escape_string ($id);
        $ime = $this->conn->real_escape_string ($ime);
        $naslov = $this->conn->real_escape_string ($naslov);
        $cena = $this->conn->real_escape_string ($cena);
        $slika = $this->conn->real_escape_string ($slika);
        $grupa = $this->conn->real_escape_string ($grupa);
        $kategorija = $this->conn->real_escape_string ($kategorija);

        $this->izvrsi_upit("INSERT INTO `proizvodi`(`id_proizvoda`, `ime`, `naslov`, `cena`, `slika`, `grupa`, `kategorija`) VALUES ('$id','$ime','$naslov','$cena','$slika','$grupa','$kategorija')");  
    }
    function obrisi_proizvod ($id) {
        $this->izvrsi_upit("DELETE FROM `proizvodi` WHERE id_proizvoda='$id'");
    }
    function izmeni_proizvod ($id, $ime, $naslov, $cena, $slika, $grupa, $kategorija) {
        $id = $this->conn->real_escape_string ($id);
        $ime = $this->conn->real_escape_string ($ime);
        $naslov = $this->conn->real_escape_string ($naslov);
        $cena = $this->conn->real_escape_string ($cena);
        $slika = $this->conn->real_escape_string ($slika);
        $grupa = $this->conn->real_escape_string ($grupa);
        $kategorija = $this->conn->real_escape_string ($kategorija);

        $this->izvrsi_upit ("UPDATE `proizvodi` SET ime='$ime', naslov='$naslov', cena='$cena', slika='$slika', grupa='$grupa', kategorija='$kategorija' WHERE id_proizvoda='$id' ");
    }




    // ZA KORISNIKE


    // RADILO POLOVICNO
    // function daj1_korisnika ($email, $password) {
    //     $r = $this->izvrsi_select ("SELECT * FROM `kupac` WHERE email='$email' and pass='$password' ");
    //     if($r ['uspesno'] === true){ 
    //         if ($r['niz'][0]['email'] == $email && $r['niz'][0]['pass'] == $password) {
    //             echo "Uspesno ste se ulogovali";
    //         } else {
    //             echo "Nepostojeci korisnik";
    //         }
            // return $r['niz'][0]; ne treba
    //     } 
    //     else {
    //         echo "Niste uneli podatke!";
    //     }
    // } 

    function dodaj_korisnika ($ime, $prezime, $email, $pass, $adresa) {
        $r = $this->izvrsi_upit("INSERT INTO `kupac`(`ime`, `prezime`, `email`, `pass`, `adresa`) VALUES ('$ime', '$prezime', '$email', '$pass', '$adresa')");
        if ($r['uspesno'] == true) {
            // return $r['niz'];
        } else {
            // die ("Neuspesan upit: ". $r ['poruka']);
        }
    }

    
    // ZA KORPU

    

    function snimi_korpu ($id_kupca, $ukupna_cena, $vreme, $adresa_isporuke) {
        $this->izvrsi_upit("INSERT INTO `korpa`(`id_kupca`, `ukupna_cena`, `vreme`, `adresa_isporuke`) VALUES ($id_kupca, $ukupna_cena, $vreme, '$adresa_isporuke')");
            return $this->conn->insert_id;
    }

    function snimi_stavku_korpe ($id_korpe,$id_proizvoda, $cena, $kolicina, $popust, $ukupno) {
        $this->izvrsi_upit("INSERT INTO `stavke_korpe`(`id`, `id_korpe`,`id_proizvoda`, `cena`, `kolicina`, `popust`, `ukupno`) VALUES ( NULL, $id_korpe,$id_proizvoda, $cena, $kolicina, $popust, $ukupno)");
      
    }
    
}

$b = new Baza ('projekat');


?>