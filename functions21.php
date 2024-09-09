<?php

/*
1.

You’re going to write a function to determine the likely genetic relationship between two people.

Write a function, whatRelation() that has one number parameter representing the percentage of DNA the two people share. Your function should print the likely relationship as a string. We expect the number passed in to always be an integer from 0 to 100

Here’s how it should calculate the relationship:

    100 should print "identical twins"
    35 through99 should print "parent and child or full siblings"
    14through 34 should print "grandparent and grandchild, aunt/uncle and niece/nephew, or half siblings"
    6 through 13 should print "first cousins"
    3 through 5 should print "second cousins"
    1 through 2 should print "third cousins"
    0 should print "not genetically related"

Checkpoint 2 Passed

2.

Test your function with several inputs to make sure it’s working as expected.
*/
function whatRelation ($percentSharedDNA)
{
 if ($percentSharedDNA === 100){
   echo "identical twins";
 } elseif ($percentSharedDNA > 34){
   echo "parent and child or full siblings";
 } elseif ($percentSharedDNA > 13){
   echo "grandparent and grandchild, aunt/uncle and niece/nephew, or half siblings";
 }  elseif ($percentSharedDNA > 5) {
   echo "first cousins";
 } elseif ($percentSharedDNA > 2){
   echo "second cousins";
 } elseif ($percentSharedDNA > 0){
   echo "third cousins";
 } else {
   echo "not genetically related";
 }
}

whatRelation(100);
echo "\n\n";
whatRelation(56);
echo "\n\n";
whatRelation(18);
echo "\n\n";
whatRelation(10);
echo "\n\n";
whatRelation(3);
echo "\n\n";
whatRelation(1);