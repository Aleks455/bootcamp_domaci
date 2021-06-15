<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        class Krevet {
            public $duzina;
            public $sirina;
            public $materijal;
            private $cena = "";

            public function __construct ($duzina, $sirina, $materijal) {
                $this->duzina = $duzina;
                $this->sirina = $sirina;
                $this->materijal = $materijal;
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
                return "Krevet je duzine  ". $this->duzina ."cm,  sirine ".$this->sirina."cm, napravljen od ".$this->materijal . "a, po ceni " .$this->cena. " RSD.";
            }

        }


        $zuti_krevet = new Krevet (220, 90, "orah");
        $zeleni_krevet = new Krevet (190, 75, "hrast");

        $zuti_krevet->postavi_cenu (32000);
        $zeleni_krevet->postavi_cenu (25000);


        // $zeleni_krevet->prikazi_cenu ();
        // echo $zeleni_krevet->__toString ();


        $cena_zuti = $zuti_krevet->vrati_cenu ();
        $cena_zeleni = $zeleni_krevet-> vrati_cenu ();

        if ($cena_zuti > $cena_zeleni) {
            echo $zuti_krevet->__toString ();

        } else {
            echo $zeleni_krevet->__toString();
        }
        

        

        echo "<hr>";


        $nov_krevet = new Krevet (230,82,"bukva");
        $nov_krevet->postavi_cenu (40000);

        echo $nov_krevet->__toString ();
        echo "<hr>";


        $cena_novog_na_popustu = $nov_krevet->popust(10);
        $nov_krevet->postavi_cenu ($cena_novog_na_popustu);
        echo $nov_krevet->__toString ();


        echo "<hr>";


       

        
    ?>


    

</body>
</html>