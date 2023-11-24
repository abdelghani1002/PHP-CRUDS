<?php

    include 'connexion.php'; 

    $sql = "delete from employees;";
    $result = $connexion->query($sql);
    mysqli_close($connexion);
    header('location:index.php');




?>