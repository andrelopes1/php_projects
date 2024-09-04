<?php
// Define the function generateStory
function generateStory($singular_noun, $verb, $color, $distance_unit) {
    // Define the story template with placeholders
    $story = "\nThe $singular_noun are lovely, $color, and deep.\n" .
             "But I have promises to keep,\n" .
             "And $distance_unit to go before I $verb,\n" .
             "And $distance_unit to go before I $verb.\n";
    
    // Return the modified story
    return $story;
}

// Invoke the function three times with different arguments
echo generateStory("tree", "dance", "blue", "kilometers");
echo generateStory("cat", "jump", "red", "miles");
echo generateStory("house", "sing", "green", "steps");
?>
