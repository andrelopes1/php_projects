<?php
namespace Codecademy;

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