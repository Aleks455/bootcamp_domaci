<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL & E_STRICT);
ini_set('log_errors', '0');
ini_set('error_log', './');


    class Krevet {
        public $duzina;
        public $sirina;
        public $materijal;
        protected $cena;

        public function __construct ($duzina, $sirina, $materijal, $cena) {
            $this->duzina = $duzina;
            $this->sirina = $sirina;
            $this->materijal = $materijal;
            $this->cena = $cena;
        }

        public function postavi_cenu ($cena) {
            $this->cena = $cena;
        }

        public function prikazi_cenu () {
            echo $this->cena;
        }
        public function vrati_cenu (){
            return $this->cena;
        }

        public function popust ($procenat) {
            $popust_u_rsd = ($this->cena*$procenat)/100;
            $cena_sa_popustom = $this->cena - $popust_u_rsd;
            return $cena_sa_popustom;
        }


        public function __toString () {
            return "Krevet je duzine ". $this->duzina ."cm,  sirine ".$this->sirina."cm, napravljen od ".$this->materijal . "a, po ceni " .$this->cena. " RSD.";
        }
    }

    class Baldahin extends Krevet {
        public $visina_bal;
        public $cena_bal;

        public function __construct ($duzina, $sirina, $materijal, $cena, $visina_bal, $cena_bal) {
            parent::__construct ($duzina, $sirina, $materijal, $cena);
            $this->visina_bal = $visina_bal;
            $this->cena_bal = $cena_bal;
        }
        public function __toString () {
            echo "<p> Cena kreveta je: ".$this->cena." A cena kreveta sa baldahinom je: ". ($this->cena+$this->cena_bal).".</p>";
        }

    }


    $neki_krevet = new Baldahin (230, 100, "bukva", 44000, 200, 15000);

    $neki_krevet->__toString ();


    
?>