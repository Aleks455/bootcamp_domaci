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
        function veci_broj ($a,$b, $c) {
            if ($a>$b && $a>$c) {
                return "Najvece je A: $a";
            }
            if ($b>$a && $b>$c) {
                return "Najvece je B: $b";
            }
            if ($c>$b && $c>$a) {
                return "Najvece je C: $c";
            }

        }

        echo veci_broj (3,20,6);


    ?>
</body>
</html>