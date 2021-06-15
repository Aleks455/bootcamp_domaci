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
        define ('A', "Prva recenica ");
        define ('B', "Neka druga recenica");
        

        function duzina (){

            $c= strlen (A);
            $d= strlen (B);

            if ($c > $d) {
                echo "<span style='color:red'>". A. "</span><br>";
                echo "<span style='color:green'>". B. "</span><br>";
                return  "Kraca recenic je: ". B ."</span>";
                
            } elseif ($c < $d) {
                echo "<span style='color:red'>". B. "</span> <br>";
                echo "<span style='color:green'>". A. "</span><br>";
                return  "Kraca recenica je: ". A ;
            } 
            else {
                return "Obe recenice imaju podjednak broj karaktera<br>";

            }
        }
   
        echo duzina () ;


    ?>
    
</body>
</html>