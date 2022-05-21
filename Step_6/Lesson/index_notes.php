<?php 

// To launch webpage to actively see your changes type this into terminal: 
// php -S localhost:8888

// Array = primitive collection of related things
// Create an array of names  
// 1. Create a variable called "names"
// 2. Make it equal to an array, symbolized by two square brackets []
// 3. Populate empty array with string values. Use a comma after each entry
// 4. We now have an array of names
$names = [

    "Ewa",

    "Robert",

    "Heidi",

    "Mr. Kitty"

]; 

// Loop through each name in the array using "foreach"
// Label each item in the array as a $name
// Inside curly brackets, say what you want to do: 
    // For each name in the array, echo it onto the screen
        // Concatenate with a comma and space if needed 
//foreach ($names as $name) {

    //echo $name . ", ";

//}

// Use "require" to "pull in everything from this path" 
require 'index_notes.view.php';