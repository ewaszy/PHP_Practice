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

        <!-- 1a. Add a list item <li></li> for each name 
        <li>Elephant</li>
        <li>Lion</li>
        <li>Zebra</li>
        <li>Alligator</li> --> 

        <!-- 2. Loop over the array with foreach and display each one within a list item --> 
        <?php
            foreach ($animals as $animal) {
                echo "<li>$animal</li>"; 
            }
        ?>
        
        <!-- 3. Or a third way (Alternative, won't use often): --> 
        <?php foreach ($animals as $animal) : ?>
            <li><?= $animal; ?></li> 
        <?php endforeach; ?>    

    </u>

</body>

</html>
