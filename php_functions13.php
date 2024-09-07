<?php
namespace Codecademy;

/* 
Use echo and the substr_count() function to print the number of times the word “really” appears in $essay_one.
Checkpoint 2 Passed

2.

Use echo and the substr_count() function to print the number of times the word “obvious” appears in $essay_two.

Notice that substr_count() is not concerned with which characters come before or after the string it’s searching for—it will count both “obvious” and “obviously”.
*/


$essay_one = "I really enjoyed the book. I thought the characters were really interesting. The plot of the novel was really engaging. I really felt the characters' emotions. They were really well-written. I really wish the ending had been different though.";
  
$essay_two = "Obviously this is a really good book. You obviously would not have made us read it if it wasn't. I felt like the ending was too obvious though. It was so obvious who did it right away. I think the thing with the light was obviously a metaphor for life. It would have been better if the characters were less obvious about their secrets.";  

// Write your code below:

echo substr_count($essay_one, "really");

echo "\n";

echo substr_count($essay_two, "obvious");