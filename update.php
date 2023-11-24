<?php

require './connexion.php';
$id = $_GET['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$hire_date = date("Y-m-d");
$job_id = $_POST['job'];
$salary = $_POST['salary'];

$sql = "UPDATE employees
        SET
                 first_name = '$first_name',
                 last_name = '$last_name',
                 email = '$email',
                 job_id = $job_id,
                 salary = $salary
        where
                employee_id = $id;
        ";

$res = mysqli_query($conn, $sql);
if($res)
        header("location:index.php");

?>