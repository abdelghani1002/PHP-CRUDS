<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/output.css" rel="stylesheet">
    <link href="./style.css" rel="stylesheet">
    <title>CRUDS in PHP MySQLi</title>
</head>

<body class="bg-gray-800 text-gray-200 p-5">

    <header class="text-center">
        <h1 class="text-4xl font-extrabold">CRUD PHP APPLICATION</h1>
    </header>

    <div class="flex flex-row justify-evenly w-100 my-6 text-lg">
        <form class="p-2 rounded-lg hover:bg-blue-500 border-2 border-blue-500" action="ajoute.php" method="POST"><button class='btn' type="submit">Add Employee</button></form>

        <form class="p-2 rounded-lg hover:bg-teal-800 border-2 border-teal-800" action="chercher.php" method="post"><button class='btn' type="submit">Search Employee</button></form>

        <form class="p-2 rounded-lg hover:bg-red-500 border-2 border-red-500" action="deleteall.php"><button class='btn' type="submit">Delete All Employee</button></form>
    </div>

    <div class="container">
        <table class="table-auto w-full text-center whitespace-no-wrap border-spacing-2">
            <thead>
                <tr>
                    <th class="py-5 bg-gray-900">ID</th>
                    <th class="py-5 bg-gray-900">Full name</th>
                    <th class="py-5 bg-gray-900">Email</th>
                    <th class="py-5 bg-gray-900">Hire date</th>
                    <th class="py-5 bg-gray-900">Job</th>
                    <th class="py-5 bg-gray-900">Salary (MAD)</th>
                    <th class="py-5 bg-gray-900" colspan='2'>Manage</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'connexion.php';

                $sql = "select `employee_id`, `first_name`, `last_name`, `email`, `hire_date`, `job_id`, `salary` from employees;";
                $result = mysqli_query($connexion, $sql);

                $id;

                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row["employee_id"];
                        $first_name = $row["first_name"];
                        $last_name = $row["last_name"];
                        $email = $row["email"];
                        $hire_date = $row["hire_date"];
                        $job_id = $row["job_id"];
                        $salary = $row["salary"];
                ?>
                        <tr class="odd:bg-gray-700">
                            <td class="py-3"><?= $id ?></td>
                            <td class="py-3"><?= $first_name . $last_name ?></td>
                            <td class="py-3"><?= $email ?></td>
                            <td class="py-3"><?= $hire_date ?></td>
                            <td class="py-3"><?= $job_id ?></td>
                            <td class="py-3"><?= $salary ?></td>

                            <td class="text-right">
                                <form class="pr-3" method='get'>
                                    <button type='button'>
                                        <a class="hover:bg-red-500 hover:text-white text-red-500 rounded-md p-2" href="delete.php?deleteid=<?= $id ?>">Delete</a>
                                    </button>
                                </form>
                            </td>
                            <td class="text-left">
                                <form class="pl-3" method='get'>
                                    <button type='button'>
                                        <a class="hover:bg-emerald-500 hover:text-white text-emerald-500 rounded-md p-2" href="update.php?updateid=<?= $id ?>">Update</a>
                                    </button>
                                </form>
                            </td>
                        </tr>


                <?php
                    }
                }
                $connexion->close();
                ?>
            </tbody>
        </table>



</body>

</html>