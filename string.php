<?php

// Function to count the number of vowels in a string
function count_vowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;
    // Iterate over each character in the string
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}

// Array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Iterate over each string in the array
foreach ($strings as $string) {
    // Count the number of vowels in the string
    $vowel_count = count_vowels($string);
    // Reverse the string
    $reversed_string = strrev($string);
    // Print the original string, vowel count, and reversed string
    echo "Original String: $string, Vowel Count: $vowel_count, Reversed String: $reversed_string\n";
}