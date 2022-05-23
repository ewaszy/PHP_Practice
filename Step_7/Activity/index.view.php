<!DOCTYPE html>

<!-- Type into terminal to boot up server:
php -S localhost:8888 -->

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Document</title> 

</head> 

<body>

    <ul>

        <!-- 1. Fetch the VALUE of each key  -->
        <!-- Key =  title, due, assigned_to, completed ; value = coding practice, today, Ewa, yes -->
        <!-- Assign each item within the $task array as a 'task details' -->   
        <?php foreach($task as $task_details) : ?>

            <!-- 1c Echo out each task entry -->
            <li><?= $task_details; ?></li>
        
        <!-- End foreach--> 
        <?php endforeach; ?>

        
        <!-- 2. Fetch the Key of each Key + Value -->
        <!-- 2a. Use a foreach statement to filter through an associative array --> 
        <!-- For each item within this array, as the key, and then the value, -->
        <?php foreach ($task as $task_details => $entered_data) : ?>

            <!-- 2c. Add 'strong' tags --> 
            <!-- 2d. Echo out each key and its value -->
            <!-- task_details =  title, due, assigned_to, completed ; entered_data = coding practice, today, Ewa, yes -->
            <li><strong><?= $task_details; ?></strong> <?= $entered_data; ?></li>

        <!-- 2e. End foreach --> 
        <?php endforeach; ?> 

    </ul>

</body>

</html>