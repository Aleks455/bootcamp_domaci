<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 
Napisati fju koja za dati niz koji predstavlja kolika je uspesnost uradjenih domacih po danima ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'>28, 'petak=>28] pronalazi:
Koji dan je najuspesniji
Kolika je prosecna uspesnost
Razliku izmedju najbolje i najgore uspesnosti -->

    <?php

    $niz_uspesnost = ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'=>28, 'petak'=>26];

    function uspesnost ($niz) {
        $najuspesniji = 0;
        $najmanjeuspesan = 0;
        $najuspesniji_dan = "";
        $najmanjeuspesan_dan = "";
        $zbir_zadataka = 0;
        $brojac = 0;
        $prosecna_uspesnost = 0;
        $razlika_uspesnosti = 0;

     

        foreach ($niz as $dan=>$broj_zadataka) {
            $zbir_zadataka = $zbir_zadataka + $broj_zadataka;
            $brojac ++;


           if ($najuspesniji < $broj_zadataka) {
               $najuspesniji = $broj_zadataka;
               $najuspesniji_dan = [$dan];
            } else {
                $najmanjeuspesan = $broj_zadataka;
                $najmanjeuspesan_dan = [$dan];
            }
           
        }
        
        $prosecna_uspesnost = $zbir_zadataka / $brojac;
        $razlika_uspesnosti = $najuspesniji - $najmanjeuspesan;
        print_r ($najuspesniji_dan);
        // echo "<br>";
        // echo $prosecna_uspesnost ."<br>";
        // echo $razlika_uspesnosti. "<br>";

        $niz = [];
        $niz = [$najuspesniji_dan, $prosecna_uspesnost,$razlika_uspesnosti];
      

        return $niz;



    } 
    $dan = [];
    $dan =  uspesnost ($niz_uspesnost);
    // var_dump ($dan);
    echo join (", ", $dan);

    ?>
</body>
</html>