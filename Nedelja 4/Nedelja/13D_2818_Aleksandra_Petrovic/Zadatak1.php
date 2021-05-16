<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .green {
        color: green;
    }
    .red {
        color: red;
    }
    </style>
</head>
<body>
    <?php
    $a = mt_rand (1,200);
    $b = mt_rand (1,200);
    echo "A je $a, a B je $b";

    if ($a > $b) {
        echo "<p> Veci broj je <span style=\"color: green\" > $a <span> </p>";
        echo "<p> Manji broj je <span style=\"color: red\" > $b <span> </p>";
    } else {
        echo "<p> Veci broj je <span style=\"color:green\" > $b <span> </p>";
        echo "<p> Manji broj je <span style=\"color: red\"> $a <span> </p>";
    }

    if ($a > $b) {
        $veci = $a;
        $manji = $b;
        $cl1 = "green";
        $cl2 = "red";
    } else {
        $veci = $b;
        $manji = $a;
        $cl1 = "green";
        $cl2 = "red";
    }

     echo "<p>Veci broj je <span class='$cl1'> $veci </span>, a manji je <span class='$cl2'> $manji </span>";
   
    ?>

</body>
</html>