<?php

/*
We’re going to do a mathematical “magic” trick. Create a variable, $my_num and assign as its value any number.

Next, create a second variable, $answer and assign $my_num as its value.
Checkpoint 2 Passed

2.

Use the addition assignment operator to add 2 to $answer.
Checkpoint 3 Passed

3.

Use the multiplication assignment operator to multiply $answer by 2.
Checkpoint 4 Passed

4.

Use the subtraction assignment operator to subtract 2 from $answer.
Checkpoint 5 Passed

5.

Use the division assignment operator to divide $answer by 2.
Checkpoint 6 Passed

6.

Almost there. Use the subtraction assignment operator to subtract your original number ($my_num) from $answer. Finally, use echo to print $answer to the terminal.

If everything went as it should, $answer should be 1. No matter what your original number was! Don’t believe us? Go ahead try it with a different number for the value of $my_num.
*/


$my_num = 34;

$answer = $my_num;

$answer += 2; 

$answer *= 2;

$answer -= 2;

$answer /= 2;

$answer -= $my_num; 

echo $answer;

