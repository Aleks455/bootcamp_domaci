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

    include "baza_klasa.php";

    $destinacije = $b->daj_destinaciju ();

    echo "<table border='1'>";
    foreach ( $destinacije as $red) {
        echo "<tr>";
        foreach ($red as $val){
            echo "<td>$val</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<br>";
    echo "<hr>";

    $prikazi_destinacija = $b->prikazi_destinacije ();

    echo "<table border='1'>";
    foreach ( $prikazi_destinacija as $red) {
        echo "<tr>";
        foreach ($red as $val){
            echo "<td>$val</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<br>";
    echo "<hr>";

    $prikazi_putnike = $b->prikazi_putnike ();

    echo "<table border='1'>";
    foreach ($prikazi_putnike as $red) {
        echo "<tr>";
        foreach ($red as $val){
            echo "<td>$val</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<br>";
    echo "<hr>";

    ?>

    <form action="prikazani_rezultati.php">
        <input type="text" name="broj_pasosa" id="broj_pasosa">
        <input type="submit" name="dugme" id="dugme" value="Prosledi broj pasosa">
    </form>

    <?php

        if (!isset($_GET['broj_pasosa'])) {
            die ("");
        } else {
            $broj_pasosa = $_GET ['broj_pasosa'];

            $b->otkazi_rezervaciju ($broj_pasosa);

            $prikazi_putnike = $b->prikazi_putnike ();
        }
        

        echo "<table border='1'>";
        foreach ($prikazi_putnike as $red) {
            echo "<tr>";
            foreach ($red as $val){
                echo "<td>$val</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    
        echo "<br>";
        echo "<hr>";

        // Warning: Trying to access array offset on value of type null in /Applications/XAMPP/xamppfiles/htdocs/php_bootcamp/34D_2818_Aleksandra_Petrovic/baza_klasa.php on line 86
    ?>


</body>
</html>