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
        $a = $_GET ['prvi_i'];
        $b = $_GET ['drugi_i'];
        $c = $_GET ['treci_i'];
        $d = $_GET ['cetvrti_i'];

        if ($b > $a && $d > $c) {
            echo "A je $a, B je $b, C je $c, D je $d<br>";

            function zbir1_1 () {
                global $a, $b;
                for ($i=$a; $i<=$b; $i++ ){
                    if ($i %4 ==0){
                        $zbir1+=$i;
                    }
                }
                return $zbir1;
            }
            
            function zbir2_2 () {
                global $c, $d;
                for ($i=$c; $i<=$d; $i++ ){
                    if ($i % 3 ==0){
                        $zbir2+=$i;
                    }
                }
                return $zbir2;
            }
            
            echo "Zbir a i b je : ". zbir1_1 () ."<br>";
            echo "Zbir c i d je : ". zbir2_2(). "<br>";


            if (zbir1_1 ()> zbir2_2()){
                echo "Zbir a i b je veci: " .zbir1_1 ();
            } else {
                echo "Zbir c i d je veci: " .zbir2_2 ();
            }

        } else {
            die ("Uslov nije ispunjen");
        }
    ?>
</body>
</html>