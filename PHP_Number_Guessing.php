<?php

/*
PHP Number Guessing

In this project, you’ll create a number guessing game. Your program will generate a random number between 1 and 10. You’ll run the game 10 times and tell the user some information about their guessing abilities.
Tasks
0/17 complete
Mark the tasks as complete by checking them off
Create the Game:

In this program, we’ll see how often the player can guess a randomly generated number. After several rounds, we’ll tell the player what percentage of the time they guessed correctly and whether they had a tendency to guess too high or too low.

For our program to work, we’ll need to keep track of some variables. Create four variables and assign 0 as the value for each:

    $play_count will keep track of how many rounds of the game have been played.
    $correct_guesses will keep track of how many times they guess correctly.
    $guess_high will keep track of how many of their guesses were higher than the actual number.
    And $guess_low will keep track of how many of their guessed were lower than the actual number.

Before we start the game, you should explain how it works to the player. Use echo to print a message explaining the game to the player. You can check out the hint to see what we wrote.

The actual gameplay will take place inside a function. Declare a function guessNumber(). It does not take in any arguments.

We’ll need access to the variables you declared within the function, so you should declare them as global variables inside your function body.

Increment the $play_count variable.

Generate the random number for this round. It should be between 1 and 10 (inclusive).

Make sure to save this number as a variable.

In the next step, we’ll prompt the player for their guess, but before we do that, let’s remind them.

Use echo to print a message to the player. We recommend putting a newline character (\n) on either side of your message so that the formatting looks nicer in the end.

Ok! Time to get the player’s guess. Use the readline() function to get the player’s input from the terminal.

We suggest passing in the prompt string ">> ". It helps the player see where they are typing.

Make sure to save their response as a variable.

Awesome! Now we have the player’s guess. The readline() function takes in user input as a string… Since we’re going to perform calculations with the player’s guess, we’ll need to convert it into a number…

Find a built-in PHP function to convert a string to an integer value.

Let’s print some information about the current round to the player. Let them know what round number they’re on, what the random number was, and what they guessed.

Adjust the global variables by comparing their guess to the random number:

    If their guess was the same as the random number, increment the $correct_guesses variable.
    If their guess was greater than the random number, increment the $guess_high variable.
    If their guess was smaller than the random number, increment the $guess_low variable.

Invoke the guessNumber() function as many times as you’d like there to be rounds. We started with 10.

Calculate the percentage of guesses the player got right and save this value as a variable.

Let the player know what percent of the time they guessed correctly.

Almost done. Let’s run a little analysis on our players guessing.

If the player had more high guesses than low guesses, print "When you guessed wrong, you tended to guess high.". Otherwise, if the player has more low guesses than high guesses, print "When you guessed wrong, you tended to guess low."

Time to play test your game! You can run your program by typing php index.php.

It’s ok if your program isn’t running properly. Be patient with yourself and work through any problems in your code.

Once the program is running, play through it to make sure it’s running as expected.

If you want to quit the program you can type controlc in the terminal.

If you want to clear the terminal so you can see your program’s output more clearly, you can enter clear in the terminal.

Now that your game is working properly, make it your own! Add things to your program and customize it to your tastes.

Looking for ideas? Here are a few challenge tasks:

    Don’t allow the player to enter a number below 1 or above 10.
    Run more complicated analysis on their guesses—did the player often guess very high? Very low?
    Make a different version of the guessing game: maybe flipping a coin.

If you create anything you’re excited about, we’re excited about it too! Please share it with us!
*/

// Initialize global variables
$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

function guessNumber() {
    global $play_count, $correct_guesses, $guess_high, $guess_low;
    
    // Increment the play count
    $play_count++;
    
    // Generate a random number between 1 and 10
    $random_number = rand(1, 10);
    
    // Explain the game to the player
    echo "\nRound $play_count: Guess a number between 1 and 10.\n";
    
    // Get the player's guess
    echo ">> ";
    $guess = trim(fgets(STDIN));
    
    // Convert the guess to an integer
    $guess = (int)$guess;
    
    // Print information about the current round
    echo "You guessed: $guess\n";
    echo "The random number was: $random_number\n";
    
    // Compare the guess with the random number
    if ($guess === $random_number) {
        $correct_guesses++;
    } elseif ($guess > $random_number) {
        $guess_high++;
    } else {
        $guess_low++;
    }
}

// Run the game 10 times
for ($i = 0; $i < 10; $i++) {
    guessNumber();
}

// Calculate the percentage of correct guesses
if ($play_count > 0) {
    $correct_percentage = ($correct_guesses / $play_count) * 100;
    echo "\nYou guessed correctly $correct_guesses out of $play_count times.\n";
    echo "Your accuracy is $correct_percentage%.\n";
}

// Provide feedback on guessing tendencies
if ($guess_high > $guess_low) {
    echo "When you guessed wrong, you tended to guess high.\n";
} elseif ($guess_low > $guess_high) {
    echo "When you guessed wrong, you tended to guess low.\n";
} else {
    echo "You guessed equally high and low when wrong.\n";
}

?>
