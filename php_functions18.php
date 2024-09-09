<?php
/*
1.

We’re creating a form with a checkbox. We want the checkbox to be colored green if the answer is correct or red if the answer is incorrect.

To start, define a function called markAnswer(). The function should take a single boolean value as an argument. This argument will be TRUE if the answer is correct or FALSE otherwise.
Checkpoint 2 Passed

2.

Now, it’s time to write the body of the function!

If the answer was correct, the markAnswer() function should return "green". Otherwise, the function should return "red".
Checkpoint 3 Passed

3.

Time to test your function! You’ll want to invoke the markAnswer() function twice — once with TRUE as an argument and again with FALSE. To ensure the function returns the correct values, use print or echo statements to print the result.
*/

function markAnswer($is_correct)
{
  if ($is_correct) {
    return "green";
  } else {
    return "red";
  }
}

echo markAnswer(FALSE);
echo "\n\n";
echo markAnswer(TRUE);
echo "\n\n";
