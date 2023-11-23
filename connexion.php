<?php
$localhost = "localhost";
$username = "root";
$port = "3306";
$password = "Abd2001/02/25";

$connexion = mysqli_connect($localhost, $username, $password,null, $port);
mysqli_query($connexion, 'use hr;');


if(!$connexion)
        die("Connection to database failds : ". mysqli_connect_error());
?>
