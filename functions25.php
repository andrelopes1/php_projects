<?php
namespace Codecademy;


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
