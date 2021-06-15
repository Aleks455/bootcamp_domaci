<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Dodati u gornji niz jos 4 osobe po zelji.
Napisati fju koja prikazuje imena svih programera.
Napisati fju koja prikazuje sve podatke neke date osobe. Pozivajuci tu funkciju prikazati sve osobe cije ime sadrzi slovo s. -->

    <?php
        $x = [ 
            ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
            ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
            ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
            ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
        ];

        $x [4]= ['ime'=>"Marko", "godine"=>40, "grad"=>"Becej", "pozicija"=>"dizajner"];
        $x [5]= ['ime'=>"Stanko", "godine"=>53, "grad"=>"Vrbas", "pozicija"=>"programer"];
        $x [6]= ['ime'=>"Pera", "godine"=>43, "grad"=>"Kraljevo", "pozicija"=>"programer"];
        $x [7]= ['ime'=>"Mika", "godine"=>28, "grad"=>"Majdanpek", "pozicija"=>"menadzer"];


        function prikazuje_imena ($x) {
            // $imena = [];
            foreach ($x as $row) {
                if ($row ["pozicija"]=="programer") {
                  
                    echo $row['ime']. "<br>";
                }
            }

        }

        prikazuje_imena ($x);
        echo "<hr>";
    
    


        function pojedinacna_osoba ($x,$ko) {
            $imena_sa_s = [];
            foreach ($x as $ind=>$row) {
                if ($row['ime'] == $ko) {
                echo  join ( ", ",$x [$ind]). "<br>";
                echo "<hr>";
               
                }
                    
                
                if ( strpos (strtolower ($row['ime']), "s") !== FALSE) {
                    array_push ($imena_sa_s, $row ['ime']);
                }

            }

            echo join (", ", $imena_sa_s). "<br>";
            
        }
        pojedinacna_osoba ($x,"Marko");

    ?>


</body>
</html>