<?php

// Regular array
// Has different types of data, and we don't know what is refers to.
// (is brown hair color? eye color? favorite color?)
//$person = [

    //31, 'brown'
//]; 

// Associative array = any number of key value pairs
// Re-write first array and give each value a key
$person = [

    'age' => 31, 
    'hair' => 'brown',  
    'career' => 'web developer'

];

// Add a new key-value pair to this array
$person['name'] = 'Jeffrey'; 

// Remove an item from an array
unset($person['age']);

// Regular array 
$animals = ['dog', 'cat']; 

// Add (push) a new item to a regular array
$animals[] = 'elephant'; 

// Call function 'var_dump' to echo out entire array with key calue pairs
// var_dump will dump the value of pretty much anything 
//var_dump($person);

// Add 'die' to immediately stop the operation after values are dumped 
// --> Will not go on to load the view file 
// Two ways: 
// 1. 
var_dump($person);
die();

//2. 
//die(var_dump($person));

require 'index.view.php'; 