<?php
require "admin_header.php";
include_once 'dbh2.inc.php';

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
        echo "<br>";

        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        $datas = array();
        if (mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)) {
                $datas[] = $row;
            }
        }
        foreach ($datas as $data)
        {
            echo "<table><tr><th>&nbsp;Användarnamn</th>";
            echo "<th>&nbsp;Email:</th>";
            echo "<th>&nbsp;Admin Ja/Nej</th><tr><td>&nbsp;";
            echo $data['uidUsers']. '&nbsp;</td><td>&nbsp;';
            echo $data['emailUsers']. '&nbsp;</td><td>&nbsp;';

                if ($data['adminUid'] == "Ja"){
                    echo $data['adminUid']. '&nbsp;</td></tr></table>';
                }
                else
            echo $data['adminUid']. 'Nej. <br>&nbsp;Lägg till som admin: <input type="radio" id="admin_ja" 
                                    name="fav_language" value="Ja">
                                    <label for="html">Ja</label>&nbsp;<button class="btn btn-sm btn-success">Lägg till</button></td></tr></table>';
        }


        ?>

    </div>
</main>

<?php
require "admin_footer.php";
?>
