<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<link  type="text/css" rel="stylesheet" href="../styles/styles_footer.css">

<div class="footer_container">
    <div class="subscription">
        <div class="subscrition_title"><p id="sub_title"> Recieve exclusive promotions, private sales and news</p></div>
        <form id="newsletter_form" action="footer.php" method="POST">
            <div class="input_sub"><input id="mail_sub" name="mail" type="mail"></div>
            <div class="input_sub"><input id="button_subscribe" type="submit" value="Subscribe"></div>
        </form>
    </div>

    <div class="social_links">
        <a href=""><img src="../images/nav/svg/facebook_icon.svg" alt="facebook_pict"></a>
        <a href=""><img src="../images/nav/svg/instagram_icon.svg" alt="instagram_pict"></a>
        <a href=""><img src="../images/nav/svg/pinterest_icon.svg" alt="printerest_pict"></a>
        <a href=""><img src="../images/nav/svg/twitter_icon.svg" alt="twitter_pict"></a>
        <a href=""><img src="../images/nav/svg/youtube_icon.svg" alt="youtube_pict"></a>
    </div>

    <div class="copyrights">
        <p> Copyrights © 2021 Aleksandra Petrović </p>
    </div>


    <?php
        // $mail_adress = $_POST ['mail'];

        //poslati mejl ka bazi
    ?>
</div>

