<?php
namespace Codecademy;

/*
You’re going to write a function which uses the abs() built-in function within its definition.

Write a function called calculateDistance() that calculates the distance between two numbers. The function should return the same result for two arguments no matter what order they’re passed into the function.

Here are some examples of how the function should work:

    calculateDistance(-1, 4) should return 5
    calculateDistance(4, -1) should return 5
    calculateDistance(3, 7) should return 4
    calculateDistance(7, 3) should return 4

Once you’ve finished writing your function, you should run it to make sure it’s working how it should.

Check out the hint if you want some help on the strategy or a reminder about how to define your own functions.
Checkpoint 2 Enabled

2.

Awesome! This time you’re going to write a function which uses the round() function.

Write a function calculateTip() which takes a number representing the total cost of a meal as its argument.

Your function should calculate a new total with an 18% tip added and return that value rounded to the nearest integer.

Your function must invoke the built-in round() function. For example:

    calculateTip(100) should return 118
    calculateTip(35) should return 41
    calculateTip(88.77) should return 105

*/

// Write your code below:

function calculateDistance($num1, $num2){
  $distance = abs($num1 - $num2);
  return $distance;

}

echo calculateDistance(0, 2);

















