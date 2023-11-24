
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./dist/output.css">
    <title>Edit employee</title>
</head>

<body class="bg-gray-800 p-5 w-100">

    <header class="text-center mb-8 text-gray-200">
        <h1 class="text-4xl font-extrabold">CR<span style="color:blueviolet; font-size: 3rem;">U</span>DS PHP APPLICATION</h1>
    </header>

    <div class="w-1/3 m-auto">
        <form class="flex flex-col flex-grow w-100" action="./update.php?id=id" method="POST">
            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="text" name="first_name" id="first_name" placeholder="First Name" value="">
            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="text" name="last_name" id="last_name" placeholder="Last Name" value="">
            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="email" name="email" id="email" placeholder="Email" value="">

            <select class="py-2 px-1 m-3 w-100 bg-gray-200 text-gray-500 rounded-md" name="job" id="job">

            </select>

            <input class="py-2 px-1 m-3 w-100 bg-gray-200 rounded-md" type="number" name="salary" id="salary" placeholder="Salary" value="">
            <input class="py-2 px-1 mt-3 w-100 bg-blue-500 hover:bg-blue-600 cursor-pointer rounded-md w-2/3 m-auto " type="submit" name="btn" id="btn" value="Edit">
        </form>
    </div>
</body>

</html>
