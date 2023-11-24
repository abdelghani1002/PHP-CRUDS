<?php
include './connexion.php';

if (!empty($_GET['id'])) {
        $id = $_GET['id'];
}

if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['job'] && !empty($_POST['salary']))) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $job_id = $_POST['job'];
        $salary = $_POST['salary'];

        $sql = "
        UPDATE employees 
        SET 
                first_name = '$first_name',
                last_name = '$last_name',
                email = '$email',
                job_id = '$job_id',
                salary = '$salary'
        where
                employee_id = '$id';
        ";

        if (mysqli_query($connexion, $sql)) {
                header('location:index.php');
        }
        echo "Error: " . $sql . "<br>" . mysqli_error($connexion);
}

$connexion->close();
