<?php
//Session_start();
include_once '../includes/dbh.inc.php';
require "admin_header.php";

?>
<main>
    <div class="container">
        <br>
    <?php
    $sql = "Select * from users";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0 )
        {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['idUsers'];
                $sqlImg = "SELECT * FROM profileimg WHERE userID = '$id'";
                $resultImg = mysqli_query($conn, $sqlImg);
                while ($rowImg = mysqli_fetch_assoc($resultImg))
                {
                    echo "<div>";

                        if ($rowImg['status'] == 0 )
                        {
                            echo "<img src='uploads/user".$id.".jpg'>";
                        }else{
                            echo "<img src='uploads/user.jpg>";
                        }
                        echo $row['username'];
                    echo "</div>";

                }
            }
        }
                else
                {
                    echo "Inga användare i databasen ännu...";
                }



    if (isset($_SESSION['adminUid'])) {
        if ($_SESSION['adminUid'] == 'Ja') {
            echo "Du är inloggad som:  ".$_SESSION['firstName']."<br>";
        }
        echo "<br><form action='admin_upload_files.php' method='post' enctype='multipart/form-data'>
                    <input type='file' name='file'>
                    <button type='submit' name='submit' class='btn btn-warning btn-sm'>Ladda Upp</button>
                    </form>";
    } else {
        echo "<h3>Du är inte inloggad...</h3><br>";
        echo "<form action='index.admin.photo.php' method='post'>
            <input class='textbox2' type='text' name='firstName' placeholder='First name'><br>
            <input class='textbox2' type='text' name='lastName' placeholder='Last name'><br>
            <input class='textbox2' type='text' name='uidUsers' placeholder='User name'><br>
            <input class='textbox2' type='password' name='pwdUsers' placeholder='Password'><br>
            <button class='btn btn-sm btn-warning' type='submit' name='submitSignup'>Signup</button>
            
        </form>";
    }

    ?>
<!--br><br>
<p>Logga in som användare.</p>
    <form action="admin_login2.php" method="post">
        <button class="btn btn-warning btn-sm" type="submit" name="submitLogin">Logga In</button>
    </form>
<br>
    <p>Logga ut som användare.</p>
    <form action="admin_logout2.php" method="post">
        <button class="btn btn-warning btn-sm" type="submit" name="submitLogout">Logga Ut</button>
    </form-->




</div>
</main>

<?php
require "admin_footer.php";
?>
