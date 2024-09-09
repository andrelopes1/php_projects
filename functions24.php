<?php
/*
1.

In a previous exercise, you wrote a function chooseCheckoutLane() using an if/else. Write a version of this function called ternaryCheckout() which accomplishes the same functionality using a ternary operator instead of an if/else.

This function should take in a single number argument representing the number of items a customer has. If the customer has 12 items or fewer, the function should return "express lane". Otherwise, the function should return "regular lane".
Checkpoint 2 Passed

2.

In a previous exercise, you wrote a function canIVote() using an if/else. Write a version of this function called ternaryVote() which accomplishes the same functionality using a ternary operator instead of an if/else.

Your function should take in a number representing an age, and return the string “yes” if the age is greater than or equal to 18, and the string “no” it’s not.
Checkpoint 3 Passed

3.

Test each of your functions twice—once with an input will fulfill the condition and once with an input that won’t. Make sure to print the results to the terminal.
*/

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
