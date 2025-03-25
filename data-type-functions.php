<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="custome-style.css">
    <title>Data Types Functions</title>
</head>

<body>
    <div class="container">

        <!-- Question 1: Type Checking -->
        <div class="question">
            <h1><span class="question-number">(1)</span> List of Type Checking Functions</h1>
            <ul>
                <li>is_int() - Checks if a variable is an integer</li>
                <li>is_string() - Checks if a variable is a string</li>
                <li>is_array() - Checks if a variable is an array</li>
                <li>is_bool() - Checks if a variable is a boolean</li>
                <li>is_float() - Checks if a variable is a float</li>
                <li>is_double() - Alias of is_float()</li>
                <li>is_null() - Checks if a variable is NULL</li>
                <li>is_numeric() - Checks if a variable is a number or numeric string</li>
                <li>is_object() - Checks if a variable is an object</li>
                <li>is_resource() - Checks if a variable is a resource</li>
                <li>is_scalar() - Checks if a variable is a scalar</li>
                <li>is_callable() - Checks if a variable is callable</li>
            </ul>
        </div>

        <?php
        echo "<div class='output'><h2>Output:</h2>";
        echo "<p>is_int(10): " . (is_int(10) ? 'true' : 'false') . "</p>";
        echo "<p>is_string('Hello'): " . (is_string('Hello') ? 'true' : 'false') . "</p>";
        echo "<p>is_array([1, 2, 3]): " . (is_array([1, 2, 3]) ? 'true' : 'false') . "</p>";
        echo "<p>is_bool(true): " . (is_bool(true) ? 'true' : 'false') . "</p>";
        echo "<p>is_float(10.5): " . (is_float(10.5) ? 'true' : 'false') . "</p>";
        echo "<p>is_double(10.5): " . (is_double(10.5) ? 'true' : 'false') . "</p>";
        echo "<p>is_null(null): " . (is_null(null) ? 'true' : 'false') . "</p>";
        echo "<p>is_numeric('10'): " . (is_numeric('10') ? 'true' : 'false') . "</p>";
        echo "<p>is_object(new stdClass()): " . (is_object(new stdClass()) ? 'true' : 'false') . "</p>";

        // Safely check file and resource
        $filePath = "data.txt";
        if (file_exists($filePath)) {
            $file = fopen($filePath, 'r');
            $isResource = is_resource($file) ? 'true' : 'false';
            fclose($file);
        } else {
            $isResource = 'false (file not found)';
        }
        echo "<p>is_resource(fopen('data.txt', 'r')): " . $isResource . "</p>";

        echo "<p>is_scalar(10): " . (is_scalar(10) ? 'true' : 'false') . "</p>";
        echo "<p>is_callable('is_int'): " . (is_callable('is_int') ? 'true' : 'false') . "</p>";
        echo "</div>";
        ?>

        <!-- Question 2: Type Casting -->
        <div class="question">
            <h1><span class="question-number">(2)</span> List of Type Casting / Conversion Functions</h1>
            <ul>
                <li>settype() - Sets the type of a variable</li>
                <li>intval() - Returns the integer value of a variable</li>
                <li>floatval() - Returns the float value of a variable</li>
                <li>strval() - Returns the string value of a variable</li>
                <li>boolval() - Returns the boolean value of a variable</li>
            </ul>
        </div>

        <?php
        echo "<div class='output'><h2>Output:</h2>";
        $val = 10;
        settype($val, 'string'); // changes $val to "10"
        echo "<p>settype(10, 'string') → new value: $val</p>";
        echo "<p>intval(10.5): " . intval(10.5) . "</p>";
        echo "<p>floatval(10): " . floatval(10) . "</p>";
        echo "<p>strval(10): " . strval(10) . "</p>";
        echo "<p>boolval(0): " . (boolval(0) ? 'true' : 'false') . "</p>";
        echo "</div>";
        ?>

        <!-- Question 3: Other Useful Type Functions -->
        <div class="question">
            <h1><span class="question-number">(3)</span> Other Useful Type Functions</h1>
            <ul>
                <li>gettype() - Returns the type of a variable</li>
                <li>var_dump() - Outputs detailed type and value info</li>
                <li>print_r() - Prints human-readable info</li>
                <li>var_export() - Returns valid PHP code representation</li>
            </ul>
        </div>

        <?php
        echo "<div class='output'><h2>Output:</h2>";
        echo "<p>gettype(10): " . gettype(10) . "</p>";

        echo "<p>var_dump(10): <pre>";
        var_dump(10);
        echo "</pre></p>";

        echo "<p>print_r(10): <pre>";
        print_r(10);
        echo "</pre></p>";

        echo "<p>var_export(10): " . var_export(10, true) . "</p>";
        echo "</div>";
        ?>
    </div>
</body>

</html>