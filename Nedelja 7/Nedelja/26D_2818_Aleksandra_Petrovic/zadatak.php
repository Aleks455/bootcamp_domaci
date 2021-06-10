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
        $x = [ 
            ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
            ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
            ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
            ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
        ];
// NIJE DOBROs
        $godine_staza = array_map (function ($osoba) {
            $osoba ['godine staza'] =  mt_rand (1,3);
        }, $x); 
        var_dump ($godine_staza);

        echo "<hr>";
         // uraditi ovo preko map funkcije
        for ($i=0; $i< count ($x); $i++) {
            $x [$i]['godine_staza'] = mt_rand (1,3);
            echo join (", ",$x[$i]). ' <br>';
        }


        echo "<hr>";


        usort ($x, function ($a, $b){
            if ($a ['godine_staza']> $b ['godine_staza']) {
                return -1;
            } else {
                return 1;
            }
        });
       
        for ($i=0; $i< count ($x); $i++) {
            echo join (", ",$x[$i]). ' <br>';
        }

        
        echo "<hr>";
        
        
// NIJE DOBRO 
        $osobe_sa_max_stazem = array_filter ($x, function ($osoba){
            $max = 0;
            if ($max < $osoba ['godine_staza']) {
                $max = $osoba ['godine_staza'];
            }
            if ($osoba['godina_staza'] == $max) {
                return true;
            } else {
                return false;
            }
        });
        var_dump ($osobe_sa_max_stazem);

        

        

      
    ?>

</body>
</html>