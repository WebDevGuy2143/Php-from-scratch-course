<?php

$score = 80;

// long way to do an if/else
if ($score >= 50) {
    echo 'High Score!';
} else {
    echo 'Low Score';
}

// Ternary or short way to do an if/else
// echo $score >= 50 ? 'High Score!' : 'Low Score';

// store the result in a variable
$result = $score >= 50 ? 'High Score!' : 'Low Score';

// display  the result
echo $result;
