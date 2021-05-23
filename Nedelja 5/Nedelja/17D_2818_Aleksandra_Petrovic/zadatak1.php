<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <p>Napisati funkciju koja prikazuje paragraf sa 2 spana unutra. Prvi span ima vase ime, drugi span vase prezime. Izracunati koliko ima slova u vasem imenu i prezimenu i zatim pozvati funkciju toliko puta. (primer: Ana Slovic - paragraf se prikazuje ukupno 9 puta)</p> -->

    <?php

    $ime = "Aleksandra";
    $prezime = "Petrovic";

    function prikaz () {
        global $ime, $prezime;
        echo "<p>
                <span>$ime</span>
                <span>$prezime</span>
            </p>";
        
    }

    $duzina_imena = strlen ($ime);
    $duzina_prezimena = strlen ($prezime);

    $duzina_slova = $duzina_imena + $duzina_prezimena;

    for ($i=1; $i<=$duzina_slova; $i++) {
        prikaz();
    }
    
    ?>
</body>
</html>