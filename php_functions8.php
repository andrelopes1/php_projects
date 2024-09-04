<?php
function calculateTip($totalCost, $tipPercent = 20) {
    // Calculate the tip amount
    $tipAmount = ($totalCost * $tipPercent) / 100;
    
    // Calculate the new total by adding the tip to the original total cost
    $newTotal = $totalCost + $tipAmount;
    
    // Return the new total
    return $newTotal;
}

// Examples to test the function
echo calculateTip(100, 25); // Output: 125
echo "\n"; // For a line break between outputs
echo calculateTip(100);     // Output: 120
echo "\n"; // For a line break between outputs
echo calculateTip(65, 15);  // Output: 74.75
?>