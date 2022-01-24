<?php
include_once 'dbh2.inc.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$uidUsers = $_POST['uidUsers'];
$pwdUsers = $_POST['pwdUsers'];

$sql = "INSERT INTO users (firstName, lastName, uidUsers, pwdUsers) 
VALUES ('$firstName', '$lastName', '$uidUsers', '$pwdUsers')";
mysqli_query($conn,$sql);

$sql = "";
mysqli_query($conn,$sql);