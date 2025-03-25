<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="custome-style.css">
    <title>Variables</title>
</head>

<body>
    <div class="container">
        <div class="question">
            <h1><span class="question-number"></span> What are Variables?</h1>
            <p>A <strong>variable</strong> in PHP is a container used to store data like strings, numbers, arrays, or
                objects.
                All variables in PHP start with a <code>$</code> symbol, followed by the variable name.</p>
            <p>For example:</p>
            <ul>
                <li><code>$name = "John";</code> → A string variable</li>
                <li><code>$age = 25;</code> → An integer variable</li>
                <li><code>$isMarried = false;</code> → A boolean variable</li>
            </ul>
        </div>


        <?php
        // Define variables
        $name = "John"; // String
        $age = 25; // Integer
        $height = 5.8; // Float
        $isMarried = false; // Boolean
        $hobbies = array("Reading", "Writing", "Coding"); // Array
        $address = null; // Null
        
        echo "<div class='output'>";
        echo "<h2>Output:</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Age:</strong> $age</p>";
        echo "<p><strong>Height:</strong> $height</p>";
        echo "<p><strong>Married:</strong> " . ($isMarried ? 'Yes' : 'No') . "</p>";
        echo "<p><strong>Hobbies:</strong> " . implode(", ", $hobbies) . "</p>";
        echo "<p><strong>Address:</strong> " . (is_null($address) ? 'NULL' : $address) . "</p>";
        echo "</div>";
        ?>
</body>

</html>