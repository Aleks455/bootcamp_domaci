<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #proizvod {
            width: 200px;
           
        }
        img {
            width: 200px;
            height: 200px;
        }
        #main {
            display: inline-block;
            text-align: center;
        }
        .red {
            color:red;
        }
        .green {
            color:green;
        }
    </style>
</head>
<body>
    <?php

        $proizvod1 = "Rumenilo";
        $slika1 = "<img src = rumenilo.png>";
        $cena1 = 250;
        $popust1 = 5;



        function pr ($proizvod, $slika, $cena, $popust) {


            echo "<div id='main'>
                    <div id='proizvod'>$proizvod</div> 
                    <div id='slika'>$slika</div>";
            if ($popust>0) {
                $cl = "red";
                $clp = "green";
                echo "<div class='$cl'> $cena RSD </div> 
                    <div class='$clp'>$popust %</div>";
            }
            if ($popust==0) {
                echo "<div class='$cl'> $cena RSD </div>";
            }
            echo "</div>"; 
        }

        pr ($proizvod1, $slika1, $cena1, $popust1);

    


    ?>
</body>
</html>