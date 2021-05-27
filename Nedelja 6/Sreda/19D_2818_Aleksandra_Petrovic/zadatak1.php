<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td {
            border: 1px solid black;
            border-collapse: collapse;

        }
        td {
            width: 40px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        echo "<table>";
        for($i=1; $i<=3; $i++){
           $prvi+=2;
           $drugi=0;

            echo "<tr>";
            for($j = 1; $j<=4; $j++ ){
                echo "<td> $prvi - ". ($drugi+=3).  "</td>";
            } 
            echo "</tr>";
        }
        echo "</table>";


    ?>

</body>
</html>