<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 2. Napraviti niz od svih brojeva koji su veći od aritmetičke sredine niza (prosečne vrednosti).  -->

    <?php
        $niz = [3,5,7,24,64,34,261,35,3,6,2,122,55,153];

        $zbir = 0;
        $arit_sredina = 0;
        $niz_nov = [];

        for ($i=0; $i < count ($niz); $i++) {
            $zbir = $zbir + $niz[$i];
            $arit_sredina = $zbir / count ($niz);


        }
        for ($i=0; $i < count ($niz); $i++) {
            if ($niz [$i] > $arit_sredina) {
                $niz_nov [] = $niz [$i];
            } 
        }
        
        var_dump ($niz_nov);

    
    ?>

</body>
</html>