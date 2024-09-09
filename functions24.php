<?php
namespace Codecademy;

function ternaryCheckout($items) {
    return ($items <= 12) ? "express lane" : "regular lane";
}

// Test the function
echo ternaryCheckout(10) . "\n"; // Should print "express lane"
echo ternaryCheckout(15) . "\n"; // Should print "regular lane"

function ternaryVote($age) {
    return ($age >= 18) ? "yes" : "no";
}

// Test the function
echo ternaryVote(20) . "\n"; // Should print "yes"
echo ternaryVote(16) . "\n"; // Should print "no"
