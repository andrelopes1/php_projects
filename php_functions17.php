<?php
namespace Codecademy;

/*
In the following tasks, you’ll be defining functions which call built-in functions within their function bodies. This time, however, you’ll have to search for the correct built-in function.

Write a function convertToShout() which takes in a string as its argument and returns that string converted to all capital letters and appended with an exclamation point. You should use a specific built-in function to do this conversion.

Once you’ve finished writing your function, you should run it—using echo to see its output—to make sure it’s working how it should.

Here are some examples:

    convertToShout("woah there, buddy") should return "WOAH THERE, BUDDY!"
    convertToShout("i just don't know") should return "I JUST DON'T KNOW!"
    convertToShout("oh, ok, that's fine") should return "OH, OK, THAT'S FINE!"
    convertToShout("it's nice to meet you") should return "IT'S NICE TO MEET YOU!"

Checkpoint 2 Passed

2.

Create a function tipGenerously() which takes in a number argument, representing the cost of a meal and returns the number with a 20% tip added rounded up to the nearest integer. You should use a specific built-in function to achieve this rounding.

Once you’ve finished writing your function, you should run it—using echo to see its output—to make sure it’s working how it should.

Here are some examples:

    tipGenerously(100.00) should return 120
    tipGenerously(982.27) should return 1179
    tipGenerously(15.67) should return 19
    tipGenerously(66.18) should return 80
    tipGenerously(21.65) should return 26

Checkpoint 3 Passed

3.

Create a function calculateCircleArea() which takes in a circle’s diameter and returns its area. You need to use a built-in function to achieve the exact precision of Pi we’re looking for.

Once you’ve finished writing your function, you should run it—using echo to see its output—to make sure it’s working how it should.

Here are some examples:

    calculateCircleArea(25) should return 490.87385212341
    calculateCircleArea(30) should return 706.8583470577
    calculateCircleArea(872) should return 597204.19707681
    calculateCircleArea(6) should return 28.274333882308
    calculateCircleArea(29) should return 660.51985541725

*/

// 1. Function to convert a string to uppercase and add an exclamation mark
function convertToShout($inputString) {
    // Convert the input string to uppercase and append an exclamation mark
    return strtoupper($inputString) . "!";
}

// Test the convertToShout function
echo convertToShout("woah there, buddy") . "\n"; // Output: "WOAH THERE, BUDDY!"
echo convertToShout("i just don't know") . "\n"; // Output: "I JUST DON'T KNOW!"
echo convertToShout("oh, ok, that's fine") . "\n"; // Output: "OH, OK, THAT'S FINE!"
echo convertToShout("it's nice to meet you") . "\n"; // Output: "IT'S NICE TO MEET YOU!"

// 2. Function to calculate a 20% tip and round up to the nearest integer
function tipGenerously($mealCost) {
    // Calculate the total cost with a 20% tip
    $totalWithTip = $mealCost * 1.20;
    // Round up to the nearest integer
    return ceil($totalWithTip);
}

// Test the tipGenerously function
echo tipGenerously(100.00) . "\n"; // Output: 120
echo tipGenerously(982.27) . "\n"; // Output: 1179
echo tipGenerously(15.67) . "\n"; // Output: 19
echo tipGenerously(66.18) . "\n"; // Output: 80
echo tipGenerously(21.65) . "\n"; // Output: 26

// 3. Function to calculate the area of a circle given its diameter using the pi() function
function calculateCircleArea($diameter) {
    // Calculate the radius from the diameter
    $radius = $diameter / 2;
    // Calculate the area using the formula π * r^2
    $area = pi() * pow($radius, 2);
    return $area;
}

// Test the calculateCircleArea function
echo calculateCircleArea(25) . "\n"; // Output: 490.87385212341
echo calculateCircleArea(30) . "\n"; // Output: 706.8583470577
echo calculateCircleArea(872) . "\n"; // Output: 597204.19707681
echo calculateCircleArea(6) . "\n"; // Output: 28.274333882308
echo calculateCircleArea(29) . "\n"; // Output: 660.51985541725
?>
