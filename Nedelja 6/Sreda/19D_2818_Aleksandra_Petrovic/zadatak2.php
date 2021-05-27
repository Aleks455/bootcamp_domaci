<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,tr {
            border: 1px solid black;
            border-collapse: collapse;
        }
        td {
            width: 30px;
            height: 30px;
            text-align: center;
        }
       



    </style>
</head>
<body>
    <?php

        echo "<table>";
        $broj_celije = mt_rand (1,64); 
        $celija=0;
        for($i=1; $i<=8; $i++){

            echo "<tr>";
            for($j = 1; $j<=8; $j++ ){
                $celija+=1;
                if ($celija == $broj_celije) {
                    echo "<td style='background-color:black'></td>";
                }else {
                    echo "<td style='background-color:white'></td>";
                }
               
            } 
            echo "</tr>";
        }
        echo "</table>";


    ?>

</body>
</html>