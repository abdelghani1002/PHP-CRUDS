<?php
require './connexion.php';

$id = $_GET['id'];
$sql = "select first_name, last_name, email, job_id, salary from employees where employee_id = $id;";
$result = mysqli_query($connexion, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $old_first_name = $row['first_name'];
    $old_last_name = $row['last_name'];
    $old_email = $row['email'];
    $old_job_id = $row['job_id'];
    $old_salary = $row['salary'];
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./dist/output.css">
    <title>Edit employee-<?= $id ?></title>
</head>

<body class="bg-gray-800 p-5 w-100">

    <header class="text-center mb-8 text-gray-200">
        <h1 class="text-4xl font-extrabold">CRUD PHP APPLICATION</h1>
    </header>

    <div class="w-1/3 m-auto">
        <form class="flex flex-col flex-grow w-100" action="./update.php?id=<?= $id ?>" method="POST">
            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="text" name="first_name" id="first_name" placeholder="First Name" value="<?= $old_first_name ?>">
            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="text" name="last_name" id="last_name" placeholder="Last Name" value="<?= $old_last_name ?>">
            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="email" name="email" id="email" placeholder="Email" value="<?= $old_email ?>">

            <select class="py-2 px-1 m-3 w-100 bg-gray-200 text-gray-500 rounded-md" name="job" id="job">


                <?php
                $sql = "select job_id, job_title from jobs;";
                $result = mysqli_query($connexion, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['job_id'];
                        $job = $row['job_title'];
                        if ($id == $old_job_id) {
                ?>
                            <option class="text-gray-500" value="<?= $id ?>" selected><?= $job ?></option>
                        <?php
                        } else {
                        ?>
                            <option class="text-gray-500" value="<?= $id ?>"><?= $job ?></option>
                <?php
                        }
                    }
                } else {
                    echo "<option>No jobs for now!</option>";
                }
                mysqli_close($connexion);
                ?>
            </select>
            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="number" name="salary" id="salary" placeholder="Salary" value="<?=$old_salary?>">
            <input class="py-2 px-1 mt-3 w-100 bg-blue-500 hover:bg-blue-600 cursor-pointer rounded-md w-2/3 m-auto " type="submit" name="btn" id="btn" value="Edit">
        </form>
    </div>
</body>

</html>
