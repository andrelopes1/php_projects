<?php
namespace Codecademy;

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
