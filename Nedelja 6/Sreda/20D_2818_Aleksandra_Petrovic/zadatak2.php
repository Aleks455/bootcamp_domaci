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

        function element ($x) {
            echo "<div>";
            for ($i=1; $i<=$x; $i++) {
                echo "<span>$i</span> <br>";
            }
            echo "</div>";

        }

        $br= 4;
        echo element($br);
    ?>
</body>
</html>