<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="custome-style.css">
    <title>Data Types</title>
</head>

<body>
    <div class="container">

        <!-- Question: What are Data Types? -->
        <div class="question">
            <h1><span class="question-number"></span> What are Data Types?</h1>
            <p>Data types define the type of data a variable can hold. PHP supports various data types, and they are
                mainly classified into:</p>
            <ul>
                <li><strong>Predefined (Primitive) Data Types:</strong> integer, float (double), string, boolean</li>
                <li><strong>User-defined Data Types:</strong> arrays, objects</li>
                <li><strong>Special (Compound) Data Types:</strong> null, resource</li>
            </ul>
        </div>

        <?php
        // Define Variables for Each Data Type
        $name = "John";            // String
        $age = 30;                 // Integer
        $price = 10.99;            // Float
        $isAdmin = true;           // Boolean
        
        $fruits = ["apple", "banana", "mango"];  // Array
        
        class Car
        {
            public $brand = "Toyota";            // Object property initialized
        }
        $myCar = new Car();                      // Object
        
        $x = null;                               // Null
        
        echo "<div class='output'>";
        echo "<h2>Output:</h2>";
        echo "<p><strong>Name (String):</strong> $name</p>";
        echo "<p><strong>Age (Integer):</strong> $age</p>";
        echo "<p><strong>Price (Float):</strong> $price</p>";
        echo "<p><strong>Is Admin (Boolean):</strong> " . ($isAdmin ? 'true' : 'false') . "</p>";
        echo "<p><strong>Fruits (Array):</strong> " . implode(', ', $fruits) . "</p>";
        echo "<p><strong>Car Brand (Object):</strong> " . $myCar->brand . "</p>";
        echo "<p><strong>Null Variable:</strong> " . (is_null($x) ? 'NULL' : $x) . "</p>";
        echo "</div>";
        ?>

    </div>
</body>

</html>