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
        $n = mt_rand (1,10);
        $x = mt_rand (1,10);

        echo "N je $n, i X je $x";

        function za_n () {
            global $n, $x;


            for ($b=1;$b<=$x;$b++) {
                echo "<div>";
                for ($i=1; $i<=$n; $i++) {
                    echo "<span>Ovo je span $i </span>";
                }
                echo "</div>";
                
            }

        }

        za_n ();
    ?>
</body>
</html>