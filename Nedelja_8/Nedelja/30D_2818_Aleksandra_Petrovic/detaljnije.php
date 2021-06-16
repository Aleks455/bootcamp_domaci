<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
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
        $id = $_GET ['id'];
        include 'Proizvod.php';
        $ws1 = new WebSite ();

        $ws1->header ();
        $ws1->meni ($podaci);

        $lp->prikazi_jedan_proizvod_detaljnije($id);

      
        
    

        $ws1->footer ();




    
    ?>
</body>
</html>