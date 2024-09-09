<?php
/*
Creating the Function "Skeleton"

Define a magic8Ball() function.

Your magic8Ball() function should prompt the player to enter a yes or no question they want to have answered. Feel free to add some personal flare to this. Use the readline() function to take in their question. Save this as a variable.

Use echo to print a message to the terminal. The message should state the received question. Print the question you received. You should feel free to add more dramatic flourishes.

Generating the random number

Your “magic” answer will be determined by a random integer. We have 20 possible responses. Generate a random integer between 0 and 19 (inclusive) and save it to a variable.

Add a line to your program which uses echo to print the random number. We’ll comment out this part of the code later, but it will be useful for testing our code so far.

Test your function

Let’s test your project so far. After your function definition, invoke your function a few times.

Run your program—providing different questions each time you’re prompted. Make sure that your message with the question and the random number are displaying as expected.

Add the conditional logic

Now it’s time to add the decision-making power to your program. You can accomplish this with either a series of if/elseif statements or a switch statement.

Your function should print the response associtated with the random number you generated:

    If the number is 0, It is certain. should be printed
    If the number is 1, It is decidedly so. should be printed
    If the number is 2, Without a doubt. should be printed
    If the number is 3, Yes - definitely. should be printed
    If the number is 4, You may rely on it. should be printed
    If the number is 5, As I see it, yes. should be printed
    If the number is 6, Most likely. should be printed

… and so on.

Check out the hint if you’d like some help getting started.

    If you haven’t already, comment out or remove the line of code where you echo the random number, and run your code again. You should see all of your questions answered!

Extra Challenges

Now that you’ve completed the project consider these extra challenges:

    Refactor your code: try to make your code as concise and easy to read as possible.
    If you used if/elseif statements, try to rewrite the code using a switch statement or vice versa.
    Customize the program to your taste—get creative!

*/

function magic8Ball() {
    // Prompt the user for a yes/no question
    echo "Ask the Magic 8-Ball a yes or no question: ";
    $question = trim(fgets(STDIN));
    
    // Print the received question with some flair
    echo "You asked: '$question'\n";
    echo "The Magic 8-Ball is thinking...\n";
    
    // Generate a random number between 0 and 19
    $randomNumber = rand(0, 19);
    
    // Print the random number (for testing purposes)
    echo "Debug: Random number is $randomNumber\n";
    
    // Array of possible responses
    $responses = [
        "It is certain.",
        "It is decidedly so.",
        "Without a doubt.",
        "Yes - definitely.",
        "You may rely on it.",
        "As I see it, yes.",
        "Most likely.",
        "Outlook good.",
        "Yes.",
        "Signs point to yes.",
        "Reply hazy, try again.",
        "Ask again later.",
        "Better not tell you now.",
        "Cannot predict now.",
        "Concentrate and ask again.",
        "Don't count on it.",
        "My reply is no.",
        "My sources say no.",
        "Outlook not so good.",
        "Very doubtful."
    ];
    
    // Print the response based on the random number
    echo $responses[$randomNumber] . "\n";
}

// Test the function
magic8Ball();

?>
