<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guessing Game - Andre Lopes 87e55a15</title>
</head>
<body>
    <h1>Welcome to the Guessing Game</h1>
    <?php
    // Set the correct number for the game
    $correctNumber = 42;

    // Check if the guess parameter is set
    if (!isset($_GET['guess'])) {
        echo "Missing guess parameter";
    } else {
        $guess = $_GET['guess'];
        // Check if the guess parameter is empty
        if (strlen($guess) < 1) {
            echo "Your guess is too short";
        // Check if the guess parameter is not a number
        } else if (!is_numeric($guess)) {
            echo "Your guess is not a number";
        // Check if the guess is too low
        } else if ($guess < $correctNumber) {
            echo "Your guess is too low";
        // Check if the guess is too high
        } else if ($guess > $correctNumber) {
            echo "Your guess is too high";
        // Check if the guess is correct
        } else {
            echo "Congratulations - You are right";
        }
    }
    ?>
</body>
</html>
