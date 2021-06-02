<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .crveni {
            color:red;
        }
        .zeleni {
            color:green;
        }
    </style>
</head>

<body>

<!-- 1. Od niza zadatih reči, napraviti niz čiji će svaki element predstavljati span. Svaki span će imati klasu "crveni", "zeleni" u zavisnosti od toga da li je reč kraća ili duža od 5 slova. Prikazati dobijeni niz. -->

    <?php

        $x= ["Neki", "novi","niz", "za", "span", ".", "Ukoliko","su","slova", "dugacka","koristice","se","zelena","boja", "."];

        $x_nov = [];

        for ($i=0; $i< count ($x); $i++) {
            if (strlen ($x[$i]) >5 ) {
                $x_nov [$i] = "<span class='crveni'>". $x [$i] ."</span>";
            } else {
                $x_nov [$i] = "<span class='zeleni'>". $x [$i] ."</span>";

            }

        }

        print_r ($x_nov);

    ?>
</body>
</html>