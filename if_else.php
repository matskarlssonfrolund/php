<?php
?>

<!DOCTYPE HTML>
<html lang="se">
<head>
    <meta charset="UTF-8">
    <title>PHP Tutorial</title>
</head>
<body>

        <?php
        $num_oranges = 4;
        $num_bananas = 36;
            if (($num_oranges > 23) && ($num_bananas > 30)){
                echo "25% Rabatt<br>";
            }elseif
                (($num_oranges > 30) || ($num_bananas > 35)){
                  echo "15% Rabatt<br>";
            }elseif (! (($num_oranges < 5)) || (!($num_bananas < 5))){
                    echo "5% Rabatt<br>";
            } else {
                echo "Ingen Rabatt<br>";
            }

        ?>
</body>
</html>