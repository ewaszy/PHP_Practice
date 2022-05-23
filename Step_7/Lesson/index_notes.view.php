<!DOCTYPE html>

<!-- Type into terminal to boot up server:
php -S localhost:8888 -->

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Document</title> 

</head> 

<body>

    <!-- Insert Unordered List --> 
    <ul>

        <!-- 1. Fetch the VALUE of each key  -->
        <!-- 1a. Foreach item within the array (Shorthand) -->
        <!-- 1b. 'Feature' =  age, hair, career; value = 31, brown , web developer
        <//?php foreach($person as $feature) : ?>

            1c Echo out the feature
            <li><//?= $feature; ?></li>
        
        End foreach
        <//?php endforeach; ?> -->



        <!-- 2. Fetch Key + Value -->
        <!-- 2a. Use a foreach statement to filter through an associative array --> 
        <!-- For each item within this array, as the key, and then the value, 
        <//?php foreach ($person as $key => $val) : ?> --> 
        <?php foreach ($person as $feature => $val) : ?>

            <!-- 2c. Add 'strong' tags --> 
            <!-- 2d. Echo out the feature (key) and the value for each feature -->
            <!-- 'Feature' =  age, hair, career; value = 31, brown , web developer -->
            <li><strong><?= $feature; ?></strong> <?= $val; ?></li>

        <!-- 2e. End foreach --> 
        <?php endforeach; ?> 

    </ul>

</body>

</html>