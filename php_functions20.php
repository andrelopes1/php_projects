<?php
namespace Codecademy;

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