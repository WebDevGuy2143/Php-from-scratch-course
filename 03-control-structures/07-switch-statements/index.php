<?php

$dayOfWeek = date('l'); // Get the current day of the week


// use a switch statement to determine the message and color based on the day of the week
switch ($dayOfWeek) {
  case 'Monday':
    $message = 'Monday blues!';
    $color = 'blue';
    break;
  case 'Tuesday':
    $message = 'At least it\'s not Monday...';
    $color = 'green';
    break;
  case 'Wednesday':
    $message = 'Humpday!';
    $color = 'orange';
    break;
  case 'Thursday':
    $message = 'One more day until the weekend starts!';
    $color = 'red';
    break;
  case 'Friday':
    $message = 'TGIF!';
    $color = 'purple';
    break;
  case 'Saturday':
    $message = 'Have a great weekend!';
    $color = 'yellow';
    break;
  case 'Sunday':
    $message = 'Have a great weekend!';
    $color = 'magenta';
    break;
  default:
    echo 'Weekend blues!';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>What Day Is It?</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      /* Change the bacnkground color based on the day of the week in the switch statement */
      color: white;
      background-color: <?php echo $color; ?>;

      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
</head>

<body>

  <!-- Display the message from the switch statement -->
  <h1><?php echo $message; ?></h1>

</body>

</html>