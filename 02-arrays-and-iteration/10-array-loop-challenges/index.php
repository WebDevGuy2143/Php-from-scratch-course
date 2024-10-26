<?php

/*
  Challenge 1: Create a multiplication table using a nested `for` loop. The table should look like this:

1 x 1 = 1
1 x 2 = 2
1 x 3 = 3
1 x 4 = 4
1 x 5 = 5
1 x 6 = 6
1 x 7 = 7
1 x 8 = 8
1 x 9 = 9
1 x 10 = 10
2 x 1 = 2
2 x 2 = 4
2 x 3 = 6
2 x 4 = 8
... 
10 x 10 = 100
*/
echo '<h3>Multiplication Table</h3>';

// Nested for loop
// loop through 1-10
for ($i = 1; $i <= 10; $i++) {
  // loop through 1-10
  for ($j = 1; $j <= 10; $j++) {

    // display the multiplication table by itteration of i and j
    echo $i . ' x ' . $j . ' = ' . ($i * $j) . '<br>';
  }
}

/*
  Challenge 2: Get the sum of the numbers in an array by using a foreach loop. For bonus points, also use a for loop.
*/

echo '<h3>Array Sum</h3>';

$numbers = [1, 2, 3, 4, 5];


// Foreach loop

$sum = 0;
foreach ($numbers as $number) {
  $sum += $number;
}

echo $sum . '<br>';  // 15

// For loop

$sum2 = 0;

for ($i = 0; $i < count($numbers); $i++) {
  $sum2 += $numbers[$i];
}

echo $sum2 . '<br>';  // 15

// echo array_sum($numbers) . '<br>';  // 15

/*
  Challenge 3: Calculate the average students grade from an array of students. Each student has their own array with the key 'grades'. 

  	1. Create an array of students with their names and grades (0 - 100)
	2. Iterate over the students array with a foreach loop
	3. Calculate the average grade for each student
*/

echo '<h3>Average Grade</h3>';

// creating a students associative array
$students = [
  ['name' => 'Max', 'grades' => [90, 80, 85, 75]],
  ['name' => 'Amelia', 'grades' => [95, 100, 88, 92]],
  ['name' => 'Jake', 'grades' => [85, 90, 95, 100]]
];  // 91.67


// foreach loop looping through the students array
foreach ($students as $student) {

  $name = $student['name'];
  $grades = $student['grades'];

  // calculate the average grade per student
  $average = array_sum($grades) / count($grades);

  // display the average grade per student
  // used the ceil function to round the average grade
  echo "{$name}'s average grade is <strong>" . ceil($average) . "</strong><br>";
}
echo '<br><br>';
