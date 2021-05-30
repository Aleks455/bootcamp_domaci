<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 

    <style>
        li {
            display: inline;
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>

    <?php

        $stavke = ["Stavka1", "Stavka2", "Stavka3", "Stavka4"];
        function lista ($x){

            for ($i=0; $i<count($x); $i++) {
                echo "<li>$x[$i]</li>";
            }
        
        }

        echo  "<ul>";
        lista ($stavke);   
        echo "</ul>";


    ?>
    
</body>
</html>