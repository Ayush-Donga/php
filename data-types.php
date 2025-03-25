<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="custome-style.css">
    </link>
    <title>Data Types</title>
</head>

<body>
    <div class="container">
        <div class="question">
            <h1><span class="question-number"></span> What is data types?</h1>
            <h2>A three types like predefined data types, user defined data types, special(compound) data type</h2>
            <h2>A predefined data types like integer, float, string, boolean.</h2>
            <h2>A user defined data types like array and objects.</h2>
            <h2>A special data types like null resources</h2>
        </div>

        <?php
        // Define Data Types
        $name = "John"; // String
        $age = 30; // Integer
        $price = 10.99; // Float
        $isAdmin = true; // Boolean
        
        $fruits = ["apple", "banana", "mango"]; // Array
        class Car
        {
            public $brand;
        }

        $myCar = new Car(); // Object
        
        $x = null;

        echo "<div class='container'>";
        echo "<div class='output'>";
        echo "<h1>Output:</h1>";
        echo "<p>Name: $name</p>";
        echo "<p>Age: $age</p>";
        echo "<p>Price: $price</p>";
        echo "<p>Is Admin: $isAdmin</p>";
        echo "<p>Fruits: $fruits[0], $fruits[1], $fruits[2]</p>";
        echo "<p>Car Brand: $myCar->brand</p>";
        echo "<p>Null: $x</p>";
        echo "</div>";
        echo "</div>";
        ?>
</body>

</html>