<?php
namespace Codecademy;

/*
Here’s the description for the str_pad() built-in function:

str_pad ( string $input , int $pad_length [, string $pad_string = " " [, int $pad_type = STR_PAD_RIGHT ]] ) : string

In the code editor, we’ve provided four variables: $a, $b, $c, and $d. Your task is to invoke str_pad() with these four variables as its arguments so that it returns the string: *~**~**~*You did it!*~**~**~*. You’ll need to figure out which order to pass them in.

Use echo to print the result of invoking the function.

This task is designed to be a little challenging. Check out the documentation for more information, and take a look at the hint for more guidance.

Note: One of the arguments (and its corresponding variable) is a PHP type we haven’t taught yet: pre-defined constants. You can solve this challenge without understanding them deeply. Predefined constants are similar to variables—they’re names which hold values. Unlike variables, predefined constants are defined by the language, not by us, and they’re constant, they can’t change value.
*/

$a = 29;                // pad_length
$b = "You did it!";     // input string
$c = STR_PAD_BOTH;      // pad_type (center the string)
$d = "*~*";             // pad_string

// Invoke str_pad() with the appropriate arguments
echo str_pad($b, $a, $d, $c);
?>
