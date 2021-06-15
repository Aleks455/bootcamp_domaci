<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- a) Napisati funkciju koja ucitava niz iz forme iz inputa. Sve brojeve u inputu razdvojiti razmakom. Fja vraca ucitani niz
b) Napisati funkciju koja ispituje i vraca da li neki dati niz X ima bar 3 parna broja.
c) Napisati funkciju koja ispituje i vraca da li neki dati niz ima sve brojeve manje od 1000.
d) Pomocu gornjih funkcija za niz dobijen iz inputa ispitati i prikazati da li taj niz ima sve brojeve manje od 1000 i bar 3 parna.  -->


    <?php
        $x = $_GET ['brojevi'];
       
        function pravi_niz ($x) {

            $niz = [];
            $niz = explode (" ", $x);

            return $niz;
            
        }
        $napravljen_niz = [];
        $napravljen_niz = pravi_niz ($x);
        $nov =  join (" ", $napravljen_niz);
        echo $nov . "<br>";
      

        $x = [2,5,36,3,6,23,15,75, 1111];
  

        function parni ($is) {
            $tri_parna = FALSE;

            $brojac = 0;

            for ($i=0; $i < count ($is); $i++){
                if ($novnov[$is] % 2 == 0) {
                    $brojac++;
                   
                }
                    
            }
            if ( $brojac > 3) {
                $tri_parna = TRUE;
            } 
            return $tri_parna;

        }
        $var_tri = parni ($x);
        var_dump ($var_tri); 
        echo "<br>";


        function manje ($m) {

            $svi_manji_od_hiljadu = TRUE;

            for ($i = 0; $i < count ($m); $i++) {
                if ($m [$i] > 1000) {
                    $svi_manji_od_hiljadu = FALSE;
                }
            }
            return $svi_manji_od_hiljadu;

        }
        $var_manje = manje ($x);
        var_dump ($var_manje);
        echo "<br>";


        function glavni ($gl) {
            
            $konacno = FALSE;
            if  (  manje ($gl) == TRUE && parni ($gl) == TRUE ) {
                $konacno = TRUE;
            }
            return $konacno;
        }
        $k = glavni ($napravljen_niz);
        var_dump ($k);
        
       
    ?>

</body>
</html>