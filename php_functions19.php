<?php

/*
1.

Write a function chooseCheckoutLane(). This function should take in a single number argument representing the number of items a customer has. If the customer has 12 items or fewer, the function should return "express lane". Otherwise, the function should return "regular lane".
Checkpoint 2 Passed

2.

In the U.S., citizens can vote if they are 18 years old or older. Write a function canIVote() that takes in a number representing an age, and return the string "yes" if they can vote, and the string "no" if they cannot.
Checkpoint 3 Passed

3.

We tested your functions to make sure they work with various inputs, but you should be testing your own functions. Test each of your functions twice—once with an input that will enter the if block and once with an input that will enter the else block. Make sure to print the results to the terminal.
*/
function chooseCheckoutLane($customer_items){
  if ($customer_items <= 12){
    return "express lane";
  
  } else {
    return "regular lane";
  }
}

function canIVote($age){
  if ($age >= 18){
    return "yes";
  } else {
    return "no";
  }
}

echo chooseCheckoutLane(10);

echo "\n" . chooseCheckoutLane(14);

echo "\n" . canIVote(15);

echo "\n" . canIVote(21);