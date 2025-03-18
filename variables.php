<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="custome-style.css"></link>
    <title>Variables</title>
</head>
<body>
    <div class="container">
        <div class="question">
            <h1><span class="question-number"></span> What is variables?</h1>
            <h2>A variable in PHP is a container used to store data, such as numbers, text, or arrays. It starts with a $ sign followed by the variable name.</h2>
        </div>
    </div>
    
    <?php
        // Define variables
        $name = "John"; // String
        $age = 25; // Integer
        $height = 5.8; // Float
        $isMarried = false; // Boolean
        $hobbies = array("Reading", "Writing", "Coding"); // Array
        $address = null; // Null

        echo "<div class='container'>";
        echo "<div class='output'>";   
        echo "<h1>Output:</h1>";
        echo "<p>Name: $name</p>";
        echo "<p>Age: $age</p>";
        echo "<p>Height: $height</p>";
        echo "<p>Married: $isMarried</p>";
        echo "<p>Hobbies: $hobbies[0], $hobbies[1], $hobbies[2]</p>";
        echo "<p>Address: $address</p>";
        echo "</div>";
        echo "</div>";
    ?>
</body>
</html>