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
    <link  type="text/css"rel="stylesheet" href="../styles/styles_navigation_bar.css">

</head>
<body>
    <header> 
        <div class="logo"><a href="page_first.php"><img src="../images/nav/logo.svg" alt="logo"></a></div>
        <nav class="navigacion">
            <ul>
                <li class="main_list"> <a href="page_index.php"> All Products </a></li>
                <li class="main_list"><a href="page_index.php?grupa=women"> Women </a>
                    <ul class="second_ul">
                        <li class="second_list"><a href="page_index.php?grupa=women&&kategorija=w_shirts"> Shirts </a></li>
                        <li class="second_list"><a href="page_index.php?grupa=women&&kategorija=jeans"> Jeans </a></li>
                        <li class="second_list"><a href="page_index.php?grupa=women&&kategorija=dresses"> Dresses </a></li>
                    </ul>
                </li>
                <li class="main_list"> <a href="page_index.php?grupa=men"> Men </a>
                    <ul class="second_ul">
                        <li class="second_list"><a href="page_index.php?grupa=men&&kategorija=m_shirts"> Shirts </a></li>
                        <li class="second_list"><a href="page_index.php?grupa=men&&kategorija=trousers"> Trousers </a></li>
                        <li class="second_list"><a href="page_index.php?grupa=men&&kategorija=shorts"> Shorts </a></li>
                    </ul>          
                </li>
                <!-- <li class="main_list"> <a href="page_index.php"> Kids </a></li> -->
            </ul>
        </nav>
            
        <div class="login_div">
            <div id="sing_in"><a href="stranica_koja_ispituje_log.php"><img src="../images/nav/sign_up.png" alt="signin_pict"></a></div>
            <div id="wish_list"><a href="stranica_koja_ispituje_wish.php"><img src="../images/nav/wish_list.png" alt="wishlist"></a></div>
            <div id="basket"><a href="stranica_koja_ispituje_korpu.php"><img src="../images/nav/bag.png" alt="basket"></a></div>
    
        </div>
       
    </header>
    <hr id="header_hr">

    
</body>
</html>





