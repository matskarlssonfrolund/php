<?php
require "header.php";

?>

<main>
    <div class="container">
        <br>
        <?php
        if (isset($_SESSION['userId'])){
            echo'<p>Du är inloggad!</p>';
        }else {
            echo'<p>Du är utloggad eller har inte rättigheter till denna sida.</p>';
        }

        if (isset($_SESSION['userId']))
        {
            require "includes/content.inc.php";

        }
        ?>


    </div>
</main>

<?php
require "footer.php";
?>