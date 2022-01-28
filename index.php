<?php
$fname = "Mats";
$enmane = "Karlsson";
$age = 64;
$height = 1.73;
$can_vote = true;
$adress = array('street'=> 'Oddergatan 27', 'city'=> 'Katrineholm');
$state = null;
define('PI', 3.1415);
?>

<!DOCTYPE HTML>
<html lang="se">
    <head>
        <meta charset="UTF-8">
        <title>PHP Tutorial</title>
    </head>
        <body>

            <p>Name: <?php echo $fname . ' ' . $enmane; ?></p>

        </body>
    </html>
