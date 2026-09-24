<?php
// 1, Define Database Credentials
$servername = "localhost";
$username = "wala";
$password = "";
$dbname = "kafouy";
// 2, Create the connection
$conn =  mysqli_connect($servername, $username, $password, $dbname);
// 3, check connection
if (!conn) {
die ("Connection failed: " , mysqli_connect_error());
}
echo 'connected';
?>