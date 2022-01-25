<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "login_sys_new";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
