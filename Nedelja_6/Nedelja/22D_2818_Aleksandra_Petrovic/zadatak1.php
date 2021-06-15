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
        $x=[224,10,135,136,347,45,35,22,64,223,37,23,434];


        $k = count ($x);
        $brojac_trocifreni = 0;
        $brojac_dvocifreni = 0;
        $dvocifreni = "";
        $trocifreni = "";

        for ($i=0; $i <= $k; $i++) {

            if ( strlen ($x[$i]) == 3) {
                $brojac_trocifreni ++;
                $trocifreni = $trocifreni . $x [$i] . ", ";


            }
            if ( strlen ($x[$i]) == 2) {
                $brojac_dvocifreni ++;
                $dvocifreni .= $x [$i]. ", ";

            }
           
        }

        if ($brojac_dvocifreni > $brojac_trocifreni) {
            echo "Ima vise dvocifrenih, i to su: $dvocifreni";

        } else {
            echo "Ima vise trocifrenih, i to su: $trocifreni";
        }

    ?>
    
</body>
</html>