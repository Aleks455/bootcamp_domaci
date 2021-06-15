<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napisati fju koja vraca true ako neki dati niz ne sadrzi nule, a u suprotnom vraca false. -->
    <?php

        $niz = [21,53,6,57,8,972,23,5,46,56,32,1,3];

        function upit_nema_nule ($x_niz) {
            $nema_nule = TRUE;

            for ($i = 0; $i < count ($x_niz); $i++) {
                if ($x_niz [$i] == 0) $nema_nule = FALSE;
            }
            return $nema_nule;
        }
        $resenje = upit_nema_nule ($niz);
        var_dump ($resenje);


    ?>
</body>
</html>