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
    $ime_i_prezime = "";
    if (isset($_GET ['ime_prezime'])) {
        $ime_i_prezime = $_GET ['ime_prezime'];
    }
    
    $i_i = substr ($ime_i_prezime, 0,1);
    $poz = stripos ($ime_i_prezime," ");
    $p_p = substr ($ime_i_prezime, $poz+1,1);

    echo "$i_i.$p_p.";


    

    ?>
</body>
</html>