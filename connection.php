<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "aj";
$conn = mysqli_connect($servername,$username,$password,$db);
if (!$conn) {
    die("You are not connected to database ". mysqli_connect_error());
}
?>