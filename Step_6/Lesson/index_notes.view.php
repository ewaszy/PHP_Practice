<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Document</title>

    <style>



     </style>   

</head>

<body>

    <!-- 1. Insert Unordered list within Body-->
    <ul>

        <!-- Add a list item <li></li> for each name --> 
        <!-- I<li>Ewa</li>
        <li>Robert</li>
        <li>Heidi</li>
        <li>Mr. Kitty</li> -->

        <!-- 2. Or you can do it dynamically: -->
        <!-- 2a. Insert php tags -->
        <!-- 2b. Insert the php function from index file -->
        <!-- 2c. Echo out the name wrapped within the list items
        < // ?php
            foreach ($names as $name) {
                echo "<li>$name</li>"; 
            }
        ?> -->
        
        <!-- 3. Or a third way (Alternative, won't use often): --> 
        <!-- 3a. Remove Curly brackets -->
        <!-- 3b. Using alt syntax, open a php, set up a 'foreach', add colon, close php -->
        <!-- 3c. Second line is using HTML: Create list item using item label ($name) -->
        <!-- 3d. Open pho again and 'endforeach' -->
        <?php foreach ($names as $name) : ?>
            <li><?= $name; ?></li> 
        <?php endforeach; ?>       

    </u>

</body>

</html>