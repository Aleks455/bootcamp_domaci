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
        $mnozenje = 1;
        for ($i=1; $i<=30; $i++) {
            $mnozenje = $mnozenje * $i;
            
            if ($mnozenje>100000) {
                break;
            }
            echo "Rezultat mnozenja je $mnozenje <br>";
        

       
        }
    ?>
</body>
</html>