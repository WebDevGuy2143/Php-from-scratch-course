<?php

// Variables storing values of if logged in and name
$isloggedIn = true;
$name = 'Gene!';


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

      <!-- "expanded conditional" or rough version -->
      <!-- conditional if/else statement checking if $isloggedIn is true or false -->
      <!-- displaying a different message based on the result -->

      <?php if ($isloggedIn) : ?>
        <?php if (isset($name)) : ?>
          <h1 class="text-3xl">Welcome, <?= $name ?></h1>
        <?php else : ?>
          <h1 class="text-3xl">Welcome to the app!</h1>
        <?php endif; ?>
      <?php else : ?>
        <h1 class="text-3xl">Please log in to continue...</h1>
      <?php endif; ?>

      <!-- clearner version of the above code -->

      <?php if ($isloggedIn && $name) : ?>
        <h1 class="text-3xl">Welcome, <?= $name ?></h1>
      <?php elseif ($isloggedIn) : ?>
        <h1 class="text-3xl">Welcome to the app!</h1>
      <?php else : ?>
        <h1 class="text-3xl">Please log in to continue...</h1>
      <?php endif; ?>

    </div>
  </div>
</body>

</html>