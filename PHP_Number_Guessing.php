<?php

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
