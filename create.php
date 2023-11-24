<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/output.css">
    <link rel="stylesheet" href="./style.css">
    <title>employee submited</title>
</head>

<body class="bg-gray-800 text-gray-200">
    <?php
    require './connexion.php';

    if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['job']) && !empty($_POST['salary'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $job_id = $_POST['job'];
        $salary = $_POST['salary'];
        $hire_date = date('Y-m-d');
        echo $hire_date;




        $query = "INSERT INTO employees(first_name, last_name, email, hire_date, job_id, salary) VALUES('$first_name','$last_name','$email','$hire_date', '$job_id', '$salary');";
        if(!mysqli_query($connexion, $query)){
            die("Faild to connect database!! : " . mysqli_error($connexion));
        }
        
    }else{

    }
    
    header('location:index.php');
    $connexion->close();
    ?>
</body>

</html>