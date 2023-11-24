<?php
require './connexion.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$hire_date = date("Y-m-d");
$job_id = $_POST['job'];
$salary = $_POST['salary'];

$sql = "INSERT into employees(first_name, last_name, email, hire_date, job_id, salary) values 
('$first_name', '$last_name', '$email', '$hire_date', 3, $salary);";

$res = mysqli_query($conn, $sql);

if ($res)
    header("location:index.php");





mysqli_close($conn);
?>
