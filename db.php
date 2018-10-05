<?php
$sname = "localhost";
$user = "root";
$pass = "";
$pwd = "pwd";

$connection = mysqli_connect($sname,$user,$pass,$pwd);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
