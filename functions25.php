<?php

/*
1.

Since it’s hard to keep track of what’s truthy or falsy in PHP, let’s write a function to check for us! Write a function truthyOrFalsy() that takes in any value and returns the string "True" if that value is truthy and the string "False" if that value is falsy.
Checkpoint 2 Passed

2.

Test your function! Invoke your function at least once with a truthy value and at least once with a falsy value. Be sure to use echo to print the results to the terminal.
*/

function truthyOrFalsy($value) {
    return $value ? "True" : "False";
}

// Test with a truthy value
echo truthyOrFalsy(1) . "\n"; // Should print "True"

// Test with a falsy value
echo truthyOrFalsy(0) . "\n"; // Should print "False"

// Additional tests
echo truthyOrFalsy("Hello") . "\n"; // Should print "True"
echo truthyOrFalsy("") . "\n";      // Should print "False"
echo truthyOrFalsy([]) . "\n";      // Should print "False"
echo truthyOrFalsy([1, 2, 3]) . "\n"; // Should print "True"
