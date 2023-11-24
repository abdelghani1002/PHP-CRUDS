<?php
    include './connexion.php' ;

    $id = $_GET['id'];
    $sql = "delete from employees where employee_id = $id;";
    $result = $connexion->query($sql);
    mysqli_close($connexion);
    header('location:index.php');
?>