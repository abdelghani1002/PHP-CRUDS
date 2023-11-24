<?php
$localhost = "localhost";
$username = "root";
$port = "3306";
$password = "Abd2001/02/25";
$db = "hr";

$connexion = mysqli_connect($localhost, $username, $password, $db, $port);

if(!$connexion)
        die("Connection to database failds : ". mysqli_connect_error());
?>
