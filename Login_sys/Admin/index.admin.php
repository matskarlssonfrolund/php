<?php
require "admin_header.php";


?>

<main>
    <div class="container">
        <br>
        <?php

        if ($_SESSION['adminUid'] == 'Ja'){
            echo'Hej ' .$_SESSION['userUid'] . ' <p>Du är inloggad och har fulla admin-rättigheter!</p>';
        }else {
            echo'<p>Du är inloggad men har inte fulla admin-rättigheter!</p>';
        }

        if ($_SESSION['adminUid'] == 'Ja')
        {
            require "../includes/content.inc.php";

        }
        else{
            require "admin.content.inc.php";
        }
        ?>


    </div>
</main>

<?php
require "admin_footer.php";
?>
