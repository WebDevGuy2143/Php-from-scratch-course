<?php

// $age = 18; // will result in true

$age = 17; // will result in false

// If statement
echo "<h2>If statement</h2>";
// If statement checking if age is greater than or equal to 18; will be false
if ($age >= 18) {
    echo 'You are an adult';
}
echo "The conditional ran and was not true";

// If-Else

echo "<h2>If/Else statement</h2>";

// If statement checking if age is greater than or equal to 18, if so print 'You are an adult', otherwise print 'You are not an adult'
if ($age >= 18) {
    echo 'You are an adult in the eyes of the government';
} else {
    echo 'You are not an adult in the eyes of the government';
}

// Nested if statement

echo "<h2>Nested if statement</h2>";

// if statement checking if age is greater than or equal to 18, if so print 'You are an adult', otherwise if age is greater than or equal to 13, print 'You are a teenager', otherwise print 'You are a child'
if ($age >= 18) {
    echo 'You are an adult';
} else {
    if ($age >= 13) {
        echo 'You are not an adult, but you are a teenager';
    } else {
        echo 'You are not an adult, or a teenager, but you are a child';
    }
}

echo "<h2>Nested if/else if/else statement</h2>";

// If-Else-If
if ($age >= 18) {
    echo 'You are an adult';
} else if ($age >= 13) {
    echo 'You are not an adult, but you are a teenager';
} else {
    echo 'You are not an adult, or a teenager, but you are a child';
}
