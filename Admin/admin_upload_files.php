<?php
if (isset($_POST['submit']))
{
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png','pdf','gif','word');

    if(in_array($fileActualExt, $allowed))
    {
        if($fileError === 0 ){
            if ($fileSize < 500000 ){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination= 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: index.admin.php?uploadsuccess");
            }else{
                echo "Filen är för stor.";
            }
        }else{
            echo "Det blev ngt fel vid uppladdningen.";
        }

    }else{
        echo "Du får inte ladda upp denna filtyp.";
    }


}

