<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Svakom proizvodu dodati članicu: grupa. String koji prikazuje kojoj grupi proizvoda pripada. U niz $podaci dodati 'grupa'..
Prepraviti metodu prikazi_sve_proizvode($grupa="") da prikazuje samo proizvode odredjene grupe ako je taj parameter dobijen.  

Ako je prazan string prikazi sve, ako nije preko fora da ispituje grupu.!!!!

Napraviti klasu WebSite. Metode: 
 - header() sa naslovom "Dobro dosli u web-shop" - link ka index.php.
 - footer() sa naslovom "Bolje vas nasli" 
 - meni() koji prikazuje listu svih grupa. Svaki naziv grupe je link - index.php?grupa=…

Prepraviti index.php i detaljnije.php da prikazuju i header, pa
Meni, pa proizvode, pa footer..
Prepraviti index.php da ucitava naziv grupe preko GET i da prikazuje grupu iz linka.  -->
    <?php


       
        include 'Proizvod.php';

        $ws1 = new WebSite ();
      
        $ws1->header ();
        $ws1->meni ($podaci);
        $lp->prikazi_sve_proizvode ();


        $ws1->footer ();

  
    ?>

</body>
</html>