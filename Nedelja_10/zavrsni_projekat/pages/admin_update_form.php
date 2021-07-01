<?php 
session_start ();
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
    <link  type="text/css"rel="stylesheet" href="../styles/styles_admin.css">

</head>

<body>
    <?php
            include "header1.php";
            include "Proizvod.php";
    ?>
    <div class="forma_container">
    <button> <a href="log_out.php"> Izlogujte se </a></button>


        <h3> DODAJ PROIZVOD U BAZU </h3>
        <br>

        <form id="admin_forma" action="admin_update_form.php" method="GET">
            <input type="hidden" type="text" name="akcija" id="forma_izmeni" value="forma_izmeni">
            <input type="hidden" type="text" name="akcija" id="dodaj" value="dodaj">

            <label for="id_proizvoda"></label>
            <input type="number" name="id_proizvoda" id="id_proizvoda" placeholder="ID proizvoda">

            <label for="ime"></label>
            <input type="text" name="ime" id="ime_proizvoda" placeholder="Ime proizvoda">

            <label for="naslov"></label>
            <input type="text" name="naslov" id="naslov_proizvoda" placeholder="Naslov proizvoda">

            <label for="cena"></label>
            <input type="number" name="cena" id="cena_proizvoda" placeholder="Cena proizvoda"> 

            <label for="slika"></label>
            <input type="text" name="slika" id="slika_proizvoda" placeholder="URL slike proizvoda">

            <label for="grupa"></label>
            <select name="grupa" id="grupa_proizvod">
                <option value="women"> Women </option>
                <option value="men"> Men </option>
            </select>
            
            <label for="kategorija"></label>
            <select name="kategorija" id="kategorija_proizvod">
                <option value="w_shirts"> Women's shirts </option>
                <option value="jeans"> Jeans </option>
                <option value="dresses"> Dresses </option>
                <option value="m_shirts"> Men's shirts </option>
                <option value="trousers"> Trousers </option>
                <option value="shorts"> Shorts </option>
            </select>

            <input type="submit" name="posalji_proizvod" id="posalji_proizvod">

        </form>
        

        <br>
        <hr>
       

    <?php 

        // DODAJ PROIZVOD

        if(isset($_GET ['akcija']) && $_GET['akcija'] == 'dodaj') {
            if (isset ($_GET ['id_proizvoda']) && isset ($_GET ['ime']) && isset ($_GET ['naslov']) && isset ($_GET ['cena']) && isset ($_GET ['slika']) && isset ($_GET ['grupa'])&& isset ($_GET ['kategorija'])) {
                $id = $_GET ['id_proizvoda'];
                $ime = $_GET ['ime'];
                $naslov = $_GET ['naslov'];
                $cena = $_GET ['cena'];
                $slika = $_GET ['slika'];
                $grupa = $_GET ['grupa'];
                $kategorija = $_GET ['kategorija'];
            
                $b->dodaj_proizvod ($id, $ime, $naslov, $cena, $slika, $grupa, $kategorija);
            }
        }
        
        // BRISI PROIZVOD

        if(isset($_GET ['akcija']) && $_GET['akcija']=='obrisi') {
            if (isset ($_GET ['id_proizvoda'])) {
                $id = $_GET ['id_proizvoda'];   
                $b->obrisi_proizvod ($id);
            } 
        }

        // IZMENI PROIZVOD 

        if(isset($_GET ['akcija']) && $_GET['akcija'] == 'izmeni') {
            if (isset($_GET['id_proizvoda']) && isset($_GET['ime']) && isset($_GET['naslov']) && isset($_GET['cena']) && isset($_GET['slika']) && isset($_GET['grupa']) && isset($_GET['kategorija'])) {
                $id_proizvoda = $_GET ['id_proizvoda'];
                $ime = $_GET ['ime'];
                $naslov = $_GET ['naslov'];
                $cena = $_GET ['cena'];
                $slika = $_GET ['slika'];
                $grupa = $_GET ['grupa'];
                $kategorija = $_GET ['kategorija'];

                $b->izmeni_proizvod ($id_proizvoda, $ime, $naslov, $cena, $slika, $grupa, $kategorija);
            }
        }

    ?>
                <h3> LISTA PROIZVODA U BAZI </h3>
                <br>
        <?php

            $proizvodi = $b->daj_proizvode ();

            echo "<table class='rezultat_proizvodi' border='1'>";
            foreach ($proizvodi as $red) {
                echo "<tr>";
                foreach ($red as $val){
                    echo "<td>$val</td>";
                    
                }
                echo "<td class='dugme_obrisi'><a class='link' href='admin_update_form.php?akcija=forma_izmeni&id_proizvoda=".$red ['id_proizvoda']." '> IZMENI PROIZVOD </a></td>";
                echo "<td class='dugme_obrisi'><a class='link' href='admin_update_form.php?akcija=obrisi&id_proizvoda=".$red ['id_proizvoda']." '> OBRISI PROIZVOD </a></td>";
                
                echo "</tr>";
            }
            echo "</table>";

            echo "<br>";
            echo "<hr>";

            

        // POSTAVI IZMENU

        if(isset($_GET['akcija']) && $_GET['akcija'] == 'forma_izmeni') {
            if (isset ($_GET ['id_proizvoda'])) {
                $id_proizvoda = $_GET ['id_proizvoda'];
                $proizvod = $b->daj_proizvod ($id_proizvoda);
                     
        ?>
         <!-- FORMA ZA IZMENU -->
         <h3> IZMENI PROIZVOD IZ BAZE </h3>

        <form id="admin_forma" action="admin_update_form.php" method="GET">
            <input type="hidden" type="text" name="akcija" id="izmeni" value="izmeni">

            <label for="id_proizvoda"></label>
            <input  type="number" name="id_proizvoda" id="id_proizvoda" placeholder="ID proizvoda" value="<?= $proizvod['id_proizvoda'] ?>">

            <label for="ime"></label>
            <input type="text" name="ime" id="ime_proizvoda" placeholder="Ime proizvoda" value="<?= $proizvod['ime'] ?>">

            <label for="naslov"></label>
            <input type="text" name="naslov" id="naslov_proizvoda" placeholder="Naslov proizvoda" value="<?= $proizvod['naslov'] ?> ">

            <label for="cena"></label>
            <input type="number" name="cena" id="cena_proizvoda" placeholder="Cena proizvoda" value="<?= $proizvod['cena'] ?> "> 

            <label for="slika"></label>
            <input type="text" name="slika" id="slika_proizvoda" placeholder="URL slike proizvoda" value="<?= $proizvod['slika'] ?> ">

            <label for="grupa"></label>
            <select name="grupa" id="grupa_proizvod" value="<?= $proizvod['grupa'] ?>">
                <option value="women"> Women </option>
                <option value="men"> Men </option>
            </select>
            
            <label for="kategorija"></label>
            <select name="kategorija" id="kategorija_proizvod" value="<?= $proizvod['kategorija'] ?>">
                <option value="w_shirts"> Women's shirts </option>
                <option value="jeans"> Jeans </option>
                <option value="dresses"> Dresses </option>
                <option value="m_shirts"> Men's shirts </option>
                <option value="trousers"> Trousers </option>
                <option value="shorts"> Shorts </option>
            </select>

            <input type="submit" name="posalji_proizvod" id="posalji_proizvod">
        </form>

    <?php
        }
    }
    ?>




    </div>
</body>
</html>