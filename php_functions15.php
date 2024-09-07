<?php
namespace Codecademy;

// Write your code below:

/*
1.

Use echo and getrandmax() to find out what the maximum random number is in this environment.
Checkpoint 2 Passed

2.

Now that we know its bounds. Let’s see what we get when we invoke the rand() function.

Use echo to print an invocation of the rand() function.

It’s totally optional, but you might consider adding this line of code between your other echo statements so you can read the output more easily:

echo "\n";

Checkpoint 3 Passed

3.

Ok! Let’s call rand() again. This time use echo and rand() to print a random number between 1 and 52 (both inclusive).
*/


echo getrandmax();

echo "\n" . rand();

echo "\n" . rand(1, 52);