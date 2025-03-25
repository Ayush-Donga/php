<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="custome-style.css">
    <title>Array And Type Of Array</title>
</head>

<body>
    <div class="container">

        <!-- Question 1: Type Checking -->
        <div class="question">
            <h1><span class="question-number">(1)</span> What is array ?</h1>
            <h2>An array in PHP is a special variable that can hold multiple values at once. Array are used to store
                manage, and manipulate collections of data.
            </h2>
        </div>

        <?php
        echo "<div class='output'><h2>Output:</h2>";
        $fruits = ["apple", "banana", "mango"];

        echo $fruits[0]; // Output: apple
        echo "</div>";
        ?>

        <!-- Question 2: Type Casting -->
        <div class="question">
            <h1><span class="question-number">(2)</span> Types of Arrays in PHP:</h1>
            <ul>
                <li>Indexed Arrays : Stores elements with a numeric index (starting from 0).</li>
                <li>Associative Arrays : Uses named keys that you assign to elements (like a dictionary or map).</li>
                <li>Multidimensional Arrays : An array that contains one or more arrays inside it.</li>
            </ul>
        </div>

        <?php
        echo "<div class='output'><h2>Output:</h2>";
        // Indexed Array
        echo "<h3>Indexed Array:</h3>";
        $colors = ["Red", "Green", "Blue"];
        echo $colors[0]; // Output: Red
        echo "</br>";
        // Associative Array
        echo "<h3>Associative Array:</h3>";
        $person = array("name" => "John", "age" => 30, "city" => "New York");
        echo $person["name"]; // Output: John
        echo "</br>";
        // Multidimensional Array
        echo "<h3>Multidimensional Array:</h3>";
        $students = [
            ["John", 85, 90],
            ["Alice", 78, 92],
            ["Bob", 88, 76]
        ];

        echo $students[0][0] . "</br>"; // Output: John
        echo $students[1][1]; // Output: 78
        echo "</br>";
        echo "<h3>Associative Multidimensional Array second example:</h3>";
        $studentDetails = [
            "John" => ["Math" => 85, "Science" => 90],
            "Alice" => ["Math" => 78, "Science" => 92]
        ];

        echo $studentDetails["John"]["Science"]; // Output: 90
        
        echo "</div>";
        ?>
    </div>
</body>

</html>