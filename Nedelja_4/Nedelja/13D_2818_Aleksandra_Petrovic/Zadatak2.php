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
    $a = mt_rand(1,500);
    $b = mt_rand (1,500);
    $c = mt_rand (1,500);

    echo "A je $a, B je $b, a C je $c";

    if ($a>$b && $a>$c) {
        echo "<p>Najveci je $a";
        if ($b>$c) {
           echo " srednji je $b, a najmanji je $c";
        }else {
            echo " srednji je $c, a najmanji je $b";
        }
    } 
    if ($b>$a && $b>$c) {
        echo "<p>Najveci je $b";
        if ($a>$c) {
           echo " srednji je $a, a najmanji je $c";
        }else {
            echo " srednji je $c, a najmanji je $a";
        }
    } 
    if ($c>$a && $c>$b) {
        echo "<p>Najveci je $c";
        if ($a>$b) {
           echo " srednji je $a, a najmanji je $b";
        }else {
            echo " srednji je $b, a najmanji je $a";
        }
    }     
    ?>
</body>
</html>