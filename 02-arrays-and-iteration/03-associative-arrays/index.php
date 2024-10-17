<?php
$output = null;


// Associative array
$user = [
    'name' => 'James',
    'email' => 'james@gmail.com',
    'password' => 'pass123',
    'hobbies' => ['tennis', 'Video Games']
];

$output = $user['name']; // outputs the value in the key/value pair for the associative array for $users

$output = $user['hobbies'][0]; // searches for the hobbies key and finds the 0 index, in which in this case is the value, tennis

// add to associative array
$user['address'] = '123 Main Street';

unset($user['address']); // removes associative array

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class="text-xl"><?= $output ?></p>
            <h2 class="text-xl font-semibold my-4">User Array:</h2>
            <p>
            <pre>
                    <?php print_r($user); ?>
                </pre>
            </p>
        </div>
    </div>
</body>

</html>