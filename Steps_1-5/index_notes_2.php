<!DOCTYPE html>
<!--Any code in a file that should be interpreted as html should start with this sequence-->
<!--This is how you make a comment in an html file-->

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Document</title>

    <!-- 3. Nest css styling at the top-->
    <!-- 4. Create Header within style-->
    <!-- 5. Set background of header to be grey with #e3e3e3; was later changed to hot pink using #FF69B4 -->
    <!-- 6. Add padding around -->
    <!-- 7. Allign text to center --> 
    <style>

        header {

            background: #FF69B4;

            padding: 2em;

            text-align: center;
        }

     </style>   

</head>

<body>

    <!-- 2.Create header section for h1 tag-->
    <header>

        <!-- 1. Create an h1 tag that hardcodes Hello World-->
        <!--<h1>Hello, World</h1>-->

        <!-- 8. Use php instead of hard code to display Hello world-->
        <!-- Remember to properly open and close which code should be read as php-->
        <h1>
            <!--<//?php 
        
                //$greeting = 'Hello World';
                
                //echo $greeting;
                

                // 9. Get name value from URL -  First type this in url of page after localhost:888 - /?name=Ewa (name = key; Ewa = value associated with that key)
                // 10. Get the key value associated with the "name" parameter
                //$name = $_GET['name'];

                // Echo out the Hello, name onto the Header of the Webpage (Hello world will change to Ewa)
                //echo "Hello, $name";


            ?>-->

            <!-- Clean Up the above code to fit into one line-->
            <!-- <//?php echo "Hello, " . $_GET['name']; ?>-->
            <!-- another way of opening php, like a shortcut -->  
            <!--<//?= "Hello, " . $_GET['name'];?>-->

            <!-- Introduce a function into the line ; Format: functionname(); -Pass data within the parentheses-->
            <!-- Tag in website URL = localhost:8888/?name=<a%20href=http://google.com">Ewa</a> - this creates my name as a link to google.com -->
            <!-- Make a function that displays all special characters contained within "name=". Will display "<a href="http://google.com">Ewa</a>" instead of "Ewa" --> 
            <!-- "Sanitizing" --> 
            <?= "Hello, " . htmlspecialchars($_GET['name']);?>

        </h1>

    </header>


</body>

</html>
