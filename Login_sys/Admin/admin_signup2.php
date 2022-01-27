<?php
include_once 'dbh2.inc.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$uidUsers = $_POST['uidUsers'];
$pwdUsers = $_POST['pwdUsers'];

$sql = "INSERT INTO users (firstName, lastName, uidUsers, pwdUsers) 
VALUES ('$firstName', '$lastName', '$uidUsers', '$pwdUsers')";
mysqli_query($conn,$sql);

$sql = "SELECT * FROM USERS WHERE uidUsers = '$uidUsers' AND first = $firstName";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0)
    {
        WHILE ($row = mysqli_fetch_assoc($result))
        {
            $uidUsers = $row['idUsers'];
            $sql = "INSERT INTO profileimg (userid, status)
                    VALUES ('$uidUsers', 1)";
            mysqli_query($conn, $sql);
            header("Location: index.admin.photo.php");
        }
    } else {
    echo " Du fick ett error!";
}