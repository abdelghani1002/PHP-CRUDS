<?php
require './connexion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./dist/output.css">
    <title>Create</title>
</head>

<body class="bg-gray-800 p-5 w-100">

    <header class="text-center mb-8 text-gray-200">
        <h1 class="text-4xl font-extrabold"><span style="color:blueviolet; font-size: 3rem;">C</span>RUDS PHP APPLICATION</h1>
    </header>

    <div class="w-1/3 m-auto">
        <form class="flex flex-col flex-grow w-100" action="./create.php" method="POST">
            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="text" name="first_name" id="first_name" placeholder="First Name">
            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="text" name="last_name" id="last_name" placeholder="Last Name">
            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="email" name="email" id="email" placeholder="Email">

            <select class="py-2 px-1 m-3 w-100 bg-gray-200 text-gray-500 rounded-md" name="job" id="job">
                <option class="text-gray-500" disabled selected value="">Select Job</option>
                <?php
                echo "test";
                $sql = "select * from jobs;";
                $res = mysqli_query($conn, $sql);
                if (mysqli_num_rows($res) > 0) :
                    print_r($res);
                    while ($row = mysqli_fetch_assoc($res)) :
                        echo "<option value=" . $row['job_id'] . ">" . $row['job_title'] . "</option>";
                    endwhile;
                endif;

                ?>
            </select>

            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="number" name="salary" id="salary" placeholder="Salary">
            <input class="py-2 px-1 mt-3 w-100 bg-blue-500 hover:bg-blue-600 cursor-pointer rounded-md w-2/3 m-auto " type="submit" name="btn" id="btn" value="Submit">
        </form>
    </div>
</body>

</html>