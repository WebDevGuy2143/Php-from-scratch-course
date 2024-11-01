<?php

/*
| Comparison Operators
| Operator | Description              |
| -------- | ------------------------ |
| ==       | Equal to                 |
| ===      | Identical to             |
| !=       | Not equal to             |
| <>       | Not equal to             |
| !==      | Not identical to         |
| <        | Less than                |
| >        | Greater than             |
| <=       | Less than or equal to    |
| >=       | Greater than or equal to |
*/

$x = 10;
$y = '10';

// var_dump($x == $y); // returns true becuase the double equals are used to compare values
// var_dump($x === $y); // returns false becuase the tripple equals are used to compare types of values
// var_dump($x != $y); // returns false becuase the comparison is not looking at the types of values. <> is also the same.
// var_dump($x !== $y); // returns true becuase the comparison is looking at the types of values
// var_dump($x > $y); // returns false becuase the comparison is looking at the types of values, not the values of the variables.
// var_dump($x < $y); // returns false becuase the comparison is looking at the types of values, not the values of the variables.
// var_dump($x <= $y); // returns true becuase the comparison is looking at the types of values, not the values of the variables.
// var_dump($x >= $y); // returns true becuase the comparison is looking at the types of values, not the values of the variables.

/*
| Logical Operators
| Operator | Description            |
| -------- | ---------------------- |
| and      | True if both are true  |
| &&       | True if both are true  |
| or       | True if either is true |
| ||       | True if either is true |
| xor      | True if one is true    |
| !        | True if it is not true |
*/

$a = 10;
$b = 20;

// var_dump($a == 10 && $b == 20); // returns true
// var_dump($a == 10 and $b == 20); // returns true
// var_dump($a == 10 || $b == 20); // returns true
// var_dump($a == 10 or $b == 20); // returns true
// var_dump($a == 10 xor $b == 20); // returns false
// var_dump(!$a == 4); // returns true