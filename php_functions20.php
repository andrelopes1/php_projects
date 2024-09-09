<?php

/*
1.

Write a function agreeOrDisagree() that takes in two strings, and returns "You agree!" if the two strings are the same and "You disagree!" if the two strings are different.
Checkpoint 2 Passed

2.

Test your function! Invoke it once with a value that will result in the if block running and once with a value that won’t.
Checkpoint 3 Passed

3.

You’re going to write a function to check if it’s time for a user to renew their subscription.

Write a function checkRenewalMonth() that takes in a user’s renewal month as a string (e.g. "January").

Your function should get the current month using the PHP built-in date() function (see the hint for help with this). It should compare the current month to the renewal month passed in. If the renewal month is not the current month, the function should return the string "Welcome!". Otherwise it should return the string "Time to renew".
Checkpoint 4 Passed

4.

Test your function! Invoke it once with a value that will result in the if block running and once with a value that won’t.
*/
function agreeOrDisagree($color1, $color2){
  if ($color1 === $color2){
    return "You agree!";
  } else {
    return "You disagree!";
  }
}

echo agreeOrDisagree("Blue", "Orange");

echo "\n" . agreeOrDisagree("Yellow", "Yellow");


function checkRenewalMonth($renewalMonth) {
    $currentMonth = date('F'); 
    if ($renewalMonth === $currentMonth) {
        return "Time to renew";
    } else {
        return "Welcome!";
    }
}

echo "\n" . checkRenewalMonth("August");
echo "\n" . checkRenewalMonth("September");