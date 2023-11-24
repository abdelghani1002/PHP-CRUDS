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
        <h1 class="text-4xl font-extrabold">C<span style="color:blueviolet; font-size: 3rem;">R</span>UDS PHP APPLICATION</h1>
    </header>

    <div class="flex flex-row justify-evenly w-100 my-6 text-lg">
        <a class="p-2 rounded-lg hover:bg-blue-500 border-2 border-blue-500" 
            href="./createForm.php" method="POST">
            Add Employee
        </a>

        <a class="p-2 rounded-lg hover:bg-teal-800 border-2 border-teal-800"
            href="./chercher.php" method="post">
            Search Employee
        </a>

        <a class="p-2 rounded-lg hover:bg-red-500 border-2 border-red-500" 
            href="./deleteall.php" onclick="return confirmDeleteAll()">
            Delete All Employee
        </a>
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
                    <th class="py-5 bg-gray-900">Salary <small>(MAD)</small></th>
                    <th class="py-5 bg-gray-900" colspan='2'>Manage</th>
                </tr>
            </thead>
            <tbody>
                        <tr class="odd:bg-gray-700">
                            <td class="py-3">id</td>
                            <td class="py-3">first_name last_name</td>
                            <td class="py-3">email</td>
                            <td class="py-3">hire_date</td>
                            <td class="py-3">job</td>
                            <td class="py-3">salary</td>

                            <td class="text-right">
                                <form class="pr-3" method='get'>
                                    <button type='button'>
                                        <a class="hover:bg-red-500 hover:text-white text-red-500 rounded-md p-2" 
                                                href="delete.php?id=id" onclick="return confirmDelete()">
                                            Delete
                                        </a>
                                    </button>
                                </form>
                            </td>
                            <td class="text-left">
                                <form class="pl-3" method='get'>
                                    <button type='button'>
                                        <a class="hover:bg-emerald-500 hover:text-white text-emerald-500 rounded-md p-2"
                                                href="editForm.php?id=id">
                                            Update
                                        </a>
                                    </button>
                                </form>
                            </td>
                        </tr>
            </tbody>
        </table>
    </div>

    <script>
        function confirmDelete() {
            var confirmation = confirm(`Are you sure you want to delete this employee?`);
            return confirmation;                              
        }
        function confirmDeleteAll(){
            var confirmation = confirm("Are you sure you want to delete All the empolyees!!?");
            return confirmation;
        }
    </script>
</body>

</html>