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

        for ($i=30; $i<=99; $i++) {
            $druga_cifra = substr ($i, 1,1);

            if ($i%3==0 || $druga_cifra %4 == 0 ) {
                continue;
            }
        
            echo "Prikazani svi brojevi $i <br>"; 
            
        }
    ?>
</body>
</html>