<?php
$output = null;

$ids =  [11, 23, 16, 46, 68, 34];
$users = ['user1', 'user2', 'user3'];

//count()
$output = count($ids); // counts the indexes in the array given and displays the total amount

// sort()
sort($ids); // sorts the values in the indexes in ascending order
sort($users); // sorts the values in the indexes in ascending order

// rsort()
rsort($ids); // sorts the values in reverse order, displaying indexes in reverse from sort function
rsort($users); // sorts the values in reverse order, displaying indexes in reverse from sort function

// array_push()
array_push($ids, 120); // adds to the end of an array; takes two parameters. First: array name. Second: value
array_push($users, 'user4'); // adds to the end of an array; takes two parameters. First: array name. Second: value

// array_pop()
array_pop($ids); // removes the last index and its value from array
array_pop($users); // removes the last index and its value from array

// array_shift()
array_shift($ids); // removes the first index and its value from array
array_shift($users); // removes the first index and its value from array

// array_unshift()
array_unshift($ids, 100); // adds index and value to the start of an array
array_unshift($users, 'user3'); // adds index and value to the start of an array

// array_slice
$ids2 = array_slice($ids, 2, 3); // creates a new array. takes three paramaters. array name, starting index number, number of indexes

// array_splice()
array_splice($ids, 1, 1, 'New ID'); // replaces the index specified in the second parameter. parameters: array name, index to be replaced, length of offset, new value
array_splice($users, 0, 1, 'New ID'); // replaces the index specified in the second parameter. parameters: array name, index to be replaced, length of offset, new value

// array_sum()
// throws a warning for php 8.3
// $output = 'Sum of IDs: ' . array_sum($ids); // gets the sum of the array values

// array_search()
$output = 'User 2 is at index: ' . array_search('user2', $users); // searches an array for a given value or index. Paramaters: index value, array name

// in_array()
$output = 'User 3 Exists: ' . in_array('user3', $users); // checks to see if a value exists in an array. In this case nothing will show because it is false


// explode()
$tags = 'computers,hardware,software';
$tagsArray = explode(',', $tags); // turns a string into an array. paramaters: delimiter, variable name

var_dump($tagsArray);

// implode()
$output = implode(', ', $users); // turns an array into a string 




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
            <h2 class="text-xl fontsemibold my-4">ID's Array:</h2>
            <p>
            <pre>
                    <?php print_r($ids) ?>
            </pre>
            </p>

            <h2 class="text-xl fontsemibold my-4">Users Array:</h2>
            <p>
            <pre>
                    <?php print_r($users) ?>
            </pre>
            </p>
        </div>
    </div>
</body>

</html>