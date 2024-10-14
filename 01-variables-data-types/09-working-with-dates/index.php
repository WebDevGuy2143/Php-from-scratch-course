<?php
$output = null;
/**
 * 
 * - `Y` - The year
 * - `m` - The month
 * - `d` - The day
 * - `D` - The day of the week (short name)
 * - `l` - The full day of the week name
 * - `h` - The hour
 * - `i` - The minute
 * - `s` - The second
 * - `a` - AM/PM
 */


// Get the Year
$output = date('Y');

// Get the year with timestamp
$output = date('Y', 936345600); // outputs the year 1999

// Get timestamp from strtotime
$output = date('Y', strtotime('1999-09-01')); // also outputs the year 1999

// Get Month
$output = date('m'); // displays current month

// Get day
$output = date('D'); // displays shorthand weekday
$output = date('l'); // displays full weekday

// full date (month, day, and year)
$output = date('Y - m - d'); // displays full date starting at the year.

$output = date('m - d - Y'); // displays full date, starting with the month

// Get hour
$output = date('h'); // displays current hour

// Get minute
$output = date('i'); // displays current minute

// Get second
$output = date('s'); // displays current second

// Get AM/PM
$output = date('a'); // displays AM or PM

// Get full date and time
$output = date('Y-m-d h:i:s a'); // displays full date and time

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
            <p class="text-xl"><?php echo $output; ?></p>
        </div>
    </div>
</body>

</html>