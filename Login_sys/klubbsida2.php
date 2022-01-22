<?php
require "header.php";

?>

<main>
    <div class="container">
        <br>
        <?php
        if (isset($_SESSION['userId'])){
            echo'<p>Du är inloggad på klubbsida 1</p>';
        }else {
            echo'<p>Du är utloggad eller har inte rättigheter till denna sida.</p>';
        }

        ?>
            <br>Lite text på klubbsida 2.

    </div>
</main>

<?php
require "footer.php";
?>
