<?php
require "admin_header.php";
?>

<main>
    <div class="mt-5 p-4 text-white text-center">
        <br>
        <h1>Lägg till admins</h1>
        <?php
            if (isset($_GET['error']))
            {
                if ($_GET['error'] == "emptyfields")
                {
                    echo "<h3 class='error'>OBS: Fyll i alla fält!</h3>";
                }
                else if ($_GET['error'] == "invaliduidmail")
                {
                    echo "<h3 class='error'>OBS: Fel användarnamn och mailadress!</h3>";
                }
                else if ($_GET['error'] == "invaliduid")
                {
                    echo "<h3 class='error'>OBS: Fel användarnamn!</h3>";
                }
                else if ($_GET['error'] == "invalidmail")
                {
                    echo "<h3 class='error'>OBS: Fel mailadress!</h3>";
                }
                else if ($_GET['error'] == "passwordcheck")
                {
                    echo "<h3 class='error'>OBS: Dina lösenord stämmer inte överens!</h3>";
                }
                else if ($_GET['error'] == "usertaken")
                {
                    echo "<h3 class='error'>OBS: Användaren finns redans!</h3>";
                }
            }
            else if ($_GET['signup'] == "success")
            {
                echo "<h3 class='success'>OBS: Du har skapat en användare!</h3>";
            }
        ?>
        <br>
        <form action="admin_signup.inc.php" method="post">

            <input class="textbox" type="text" name="uid" placeholder=" Username: "><br><br>
            <input class="textbox" type="text" name="mail" placeholder=" Email: "><br><br>
            <input class="textbox" type="password" name="pwd" placeholder=" Password: "><br><br>
            <input class="textbox" type="password" name="pwd-repeat" placeholder=" Repeat password: "><br><br>
            <button class="btn btn-warning" type="submit" name="signup-submit">Signup</button>
        </form>
    </div>
</main>

<?php
require "admin_footer.php";
?>
