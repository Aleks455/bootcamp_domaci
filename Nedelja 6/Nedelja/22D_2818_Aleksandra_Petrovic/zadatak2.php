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

        $niz = ["potop", "buducnost", "lul", "nije"];

        function palindrom ($x) {

            for ($i=0; $i<count($x); $i++) {
                if ($x [$i] == strrev ($x [$i])) {
                    $palindromi = $palindromi . $x [$i]. ", ";
                    
                } 
                
            }
            return "Palindrom su: $palindromi ";


        }

        echo palindrom ($niz);

        

    ?>
    
</body>
</html>