<?php

// Basic for loop (initializer, condition, incrementor)
// displays numbers 0-20, per line

/* for ($i = 0; $i <= 20; $i++) {
    echo $i . '<br />';
} */

// Basic While Loop. 
/* $i = 0; // initializer, while function (condition, incrementor), 
while ($i <= 20) {
    echo $i . '<br />';
    $i++;
} */

// Basic Do-While
// displays numbers 0-10, but always runs/displays the value of $i no matter what since the compiler sees that first
// runs twice (displays the value of $i in the echo, then runs the conditional)

/* $i = 0;

do {
    echo $i;
    $i++;
} while ($i < 10); */
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
            <!-- instead of {} in regular php, within HTML, you use : to open and close off conditionals -->
            <h1 class="text-3xl font-semibold">Basic Loops</h1><br />
            <h2 class="text-2xl font-semibold">For Loop</h2>
            <ul>
                <?php for ($i = 0; $i <= 20; $i++): ?>
                    <li>Number: <?= $i ?></li>
                <?php endfor; ?>
            </ul>

            <br />
            <h2 class="text-2xl font-semibold">While Loop</h2>
            <ul>
                <?php $i = 0;
                while ($i <= 20): ?>
                    <li>Number: <?= $i; ?></li>
                <?php $i++;
                endwhile; ?>
            </ul>
            <br />
            <h2 class="text-2xl font-semibold">Do-While</h2>
            <ul>
                <?php $i = 0;
                do { ?>
                    <li><?= $i; ?></li>
                <?php $i++;
                } while ($i <= 10) ?>
            </ul>
        </div>
    </div>
</body>

</html>