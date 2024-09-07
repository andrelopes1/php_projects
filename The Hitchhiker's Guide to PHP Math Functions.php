<?php

/*
We have given you an $initial value to start from as an octal string. (octal is a base 8 system of notation, instead of the likely more familiar decimal base 10 system).

Using the PHP Documentation, find a PHP function to convert this octal string to a decimal number.

Sometimes it might be easier to use your favorite search engine to locate the right page within the PHP documentation.

Save the result in a variable $a. Throughout this project, print your result at each step and check it against the hint. Be sure to add a newline at the end of each print statement.

The value of $a is a number of degrees. Use a PHP function to convert it to radians and store the result in a new variable, $b.

Use a built-in PHP function to take the cosine of $b and store it in a new variable, $c.

Use a built-in PHP function to round $c to 3 decimal places and store the result in a new variable, $d.

Find a PHP function to take the natural log of $d and store the result in a new variable, $e.

Use a PHP function to take the absolute value of $e and store it in $f.

Use a PHP function to take the inverse, or arc cosine of $f and store the result in $g.

$g is a number in radians. Use a PHP function to convert this to a number of degrees and store it as $h.

Use a PHP function to floor (round down) $h and store the result in $i.

Subtract 47 from $i to arrive at the solution, $j.
*/


// Given initial value in octal format as a string
$initial = "034";

// Step 1: Convert the octal string to a decimal number
$a = octdec($initial);
echo $a . "\n"; // Print $a

// Step 2: Convert degrees to radians
$b = deg2rad($a);
echo $b . "\n"; // Print $b

// Step 3: Calculate the cosine of $b
$c = cos($b);
echo $c . "\n"; // Print $c

// Step 4: Round $c to 3 decimal places
$d = round($c, 3);
echo $d . "\n"; // Print $d

// Step 5: Calculate the natural log of $d
$e = log($d);
echo $e . "\n"; // Print $e

// Step 6: Take the absolute value of $e
$f = abs($e);
echo $f . "\n"; // Print $f

// Step 7: Calculate the arc cosine of $f
$g = acos($f);
echo $g . "\n"; // Print $g

// Step 8: Convert radians to degrees
$h = rad2deg($g);
echo $h . "\n"; // Print $h

// Step 9: Floor the value of $h
$i = floor($h);
echo $i . "\n"; // Print $i

// Step 10: Subtract 47 from $i to get the solution
$j = $i - 47;
echo $j . "\n"; // Print the final result
?>
