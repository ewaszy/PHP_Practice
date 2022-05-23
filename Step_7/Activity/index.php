<?php 

// Activity Instructions

// 1. Prepare a task (like a to-do item), call the variable "task"
// 2. Make it equal to an associative array that contains details about the task, including: 
// Title of the task, when it is due (ex: string - today, tomorrow, next week), who it is assigned to, and whether or not is is completed (yes/no). 
// title, due, assigned_to, completed 

$task = [

    'title' => 'Coding Practice',
    'due' => 'Today',
    'assigned_to' => "Ewa",
    'completed' => "Yes"

];  

// Require view file
require 'index.view.php'; 