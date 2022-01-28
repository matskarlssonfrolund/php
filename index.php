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

        sida2

            <p>Name: <?php echo $fname . ' ' . $enmane; ?></p>
        <form action="" method="get">
            <label>Your State: </label>
            <input type="text" name="state"><br><br>
            <label>Number 1:  </label>
            <input type="text" name="num_1"><br><br>
            <label>Number 2:  </label>
            <input type="text" name="num_2"><br><br>
            <input type="submit" value="Submit">
        </form>
        <?php
            if(isset($_GET) && array_key_exists('state', $_GET)) {
                $state = $_GET['state'];
                if (isset($state) && !empty($state)) {
                    echo 'Du bor i ' . $state . '<br>';
                    echo "$fname bor i $state<br>";
                }
                    if (count($_GET) >=3){
                        $num_1 = $_GET['num_1'];
                        $num_2 = $_GET['num_2'];
                        echo "$num_1 + $num_2 =  " . ($num_1 + $num_2)
                        . "<br>";
                        echo "$num_1 - $num_2 =  " . ($num_1 -+ $num_2)
                            . "<br>";
                        echo "$num_1 * $num_2 =  " . ($num_1 * $num_2)
                            . "<br>";
                        echo "$num_1 % $num_2 =  " . ($num_1 % $num_2)
                            . "<br>";

                        echo "Increment $num_1 = " . (++$num_1) . "<br>";
                        echo "Decrement $num_1 = " . (--$num_1) . "<br>";



                    }
            }
        ?>

        </body>
    </html>
