<?php
require "admin_header.php";

?>
<main>
    <div class="container"><br>
        <div class="row">
        <div class="col-sm">
        <form action="admin_upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <button type="submit" name="submit" class="btn btn-warning btn-sm">Ladda upp</button>
        </form>
            Lite text uner det hela som handlar om hur man ska ladda upp filer och vilka filer som går att ladda upp.
        </div>
            <div class="col-sm">
                test
        </div>
            <div class="col-sm">
                test
            </div>
    </div>
</main>
<?php
require "admin_footer.php";

?>
<div class="container">
    <div class="row">
        <div class="col-sm">
            One of three columns
        </div>
        <div class="col-sm">
            One of three columns
        </div>
        <div class="col-sm">
            One of three columns
        </div>
    </div>
</div>