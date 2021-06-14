<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class SastojakHrane {
    public $naziv;
    public $mera;
    public $kalorije;

    function __construct ($naziv, $mera, $kalorije) {
        $this->naziv = $naziv;
        $this->mera = $mera;
        $this->kalorije = $kalorije;
    }
    function promeniMeru ($nova_mera) {
        $this->mera = $nova_mera;
    }
    function prikazi () {
        echo "<p>".$this->naziv. ", "  .$this->mera. ", " .$this->kalorije."</p>";
    }
    

}

class Jelo {
    public $naslov;
    public $opis;
    public $podaci;

    function __construct ($naslov, $opis, $podaci) {
        $this->naslov = $naslov;
        $this->opis = $opis;
        $this->podaci = [];
        for ($i=0; $i<count($podaci); $i++) {
            // $this->dodajObjekat ($podaci [$i] ['naziv'], $podaci [$i] ['mera'], $podaci [$i] ['kalorije']);
            $pomocna = new SastojakHrane ($podaci [$i] ['naziv'], $podaci [$i] ['mera'], $podaci [$i] ['kalorije']);
            array_push ($this->podaci, $pomocna);
        }
        
    }


    function dodajObjekat ($naziv,$mera, $kalorije) {
        $pomocna = new SastojakHrane ($naziv,$mera, $kalorije);
        array_push ($this->podaci, $pomocna);
    }
    
    function promeniMeru ( $oznaka_naziv, $nova_mera) {
        for ($i=0; $i<count($this->podaci); $i++) {
            if ($this->podaci[$i]->naziv == $oznaka_naziv) {
                $this->podaci[$i]->promeniMeru ($nova_mera);

            }

        }

    }
  
    function prikazi () {
        
            echo "<p>".$this->naslov.", ".$this->opis. "</p>";

            for ($i=0; $i<count($this->podaci); $i++) {
                echo $this->podaci[$i]->prikazi ();
            }

        
    }

}

$podaci = [
	["naziv"=>"jaja", "mera"=>"2", "kalorije"=>300],
	["naziv"=>"brasno", "mera"=>"200g", "kalorije"=>600],
	["naziv"=>"secer", "mera"=>"20g", "kalorije"=>100],
	["naziv"=>"so", "mera"=>"5g", "kalorije"=>40]
];

$jelo  = new Jelo ("Palačinke", "Najbolje jelo ikad", $podaci);
$jelo->dodajObjekat ("brasno","20g",100);
$jelo->prikazi();
$jelo->promeniMeru ("brasno", "400g");
$jelo->prikazi();



?>