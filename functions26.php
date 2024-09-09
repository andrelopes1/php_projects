<?php
/*
1.

In previous exercises that didn’t require user input, we ran your code for you. Now that you’re going to be using the terminal, you’ll also be running your own programs there. To run your program you’ll need to enter php src/index.php in the terminal.

We wrote the first line of a program in src/index.php. Run the program. You should see the text printed to the terminal.
Checkpoint 2 Passed

2.

Time to expand the program in src/index.php. Use the readline() function to prompt a user.

You can use whatever you want as the prompt string. We tend to use ">> " or "> " because we feel it gives the user a clear idea of where to type. But test things out and see what you like!

The user will be entering their first name. You should save this response in a variable.
Checkpoint 3 Passed

3.

Your program should handle three situations:

    If the user’s name is greater than 8 characters, you should print "Hi, [THEIR NAME]. That's a long name."
    If their name is between 4 and 8 characters (inclusive), you should print "Hi, [THEIR NAME].".
    And if their name is 3 characters or fewer, you should print "Hi, [THEIR NAME]. That's a short name.".

Checkpoint 4 Passed

4.

Time to test your code. Run your code a couple times to make sure it’s working as expected.
*/

echo "Hello, there. What's your first name?\n";  

$name = readline(">> ");

$name_length = strlen($name);

if ($name_length > 8) {
  echo "Hi, ${name}. That's a long name.";
} elseif ($name_length > 3) {
  echo "Hi, ${name}.";
} else {
  echo "Hi, ${name}. That's a short name.";
}
