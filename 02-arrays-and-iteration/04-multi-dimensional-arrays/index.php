<?php
$output = null;

// multidimential Array
$fruits = [
  ['Apple', 'Red'],
  ['Orange', 'Orange'],
  ['Banana', 'Yellow']
];

$output = $fruits[0][1]; // displays index, value. selects apple and displays the index for that array

$fruits[] = ['Grape', 'Purple']; // adds to the multidimensional array at the end

// set users to store multiple arrays (user records)
$users = [
  ['name' => 'James', 'email' => 'james@gmail.com', 'password' => 'pass123'],
  ['name' => 'Jimmy', 'email' => 'jimmy@gmail.com', 'password' => 'pass123'],
  ['name' => 'Laura', 'email' => 'laura@gmail.com', 'password' => 'pass123'],
];

// adds a new array at the end of the list of arrays within users
$users[] = ['name' => 'Mick', 'email' => 'mick@gmail.com', 'password' => 'pass123'];

// another way to add a new array
array_push($users, ['name' => 'lindsay', 'email' => 'lindsaygmail.com', 'password' => 'pass123']);

// remove last array
array_pop($users);

// removes first array
array_shift($users);

// remove specific array
unset($users[0]); // removes the first array which is index 0

$output = $users[1]['email']; // displays the email value for the first multidimensional array

$output = count($users); // counts how many arrays are within the first array

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
      <p>
      <pre>
<?php print_r($users) ?> 
        </pre>
      </p>
    </div>
  </div>
</body>

</html>