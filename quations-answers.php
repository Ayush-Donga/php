<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quations & Answers</title>
</head>
<body>
    <h1>(1) What is php?</h1>
    <h2> => PHP (Hypertext Preprocessor) is a server-side scripting language used for web development to 
        create dynamic and interactive web pages.</h2>
    <h1>(2) Whats is variables ?</h1>
    <h2> => Variables are used to store information to be referenced and manipulated in a computer program.</h2>
    <h1>(3) How to declare a variable in PHP ?</h1>
    <h2> => In PHP, a variable starts with the $ sign, followed by the name of the variable.</h2>
    <h1>(4) How to assign a value to a variable in PHP ?</h1>
    <h2> => In PHP, a variable is assigned with the = sign, followed by the value of the variable.</h2>
    <h1>(5) How to display the value of a variable in PHP ?</h1>
    <h2> => In PHP, a variable is displayed with the echo or print statement.</h2>
    <h1>(6) What is the difference between echo and print in PHP ?</h1>
    <h2> => echo and print are more or less the same. They are both used to output data to the screen. The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.</h2>
    <h1>(7) What is the difference between single quotes and double quotes in PHP ?</h1>
    <h2> => In PHP, single quoted strings will display things almost completely "as is." Variables and most escape sequences will not be interpreted. Double quotes will display a host of escaped characters (including some regexes), and variables in the strings will be evaluated.</h2>
    <h1>(8) What is the difference between == and === in PHP ?</h1>
    <h2> => == is an equal comparison operator that compares two values and returns true if they are equivalent or false otherwise. === is an identical comparison operator that compares two values and returns true if they are equal and of the same type.</h2>
    <h1>(9) What is the difference between $a++ and ++$a in PHP ?</h1>
    <h2> => $a++ is a post-increment operator that increments the value of $a after the current statement has been executed. ++$a is a pre-increment operator that increments the value of $a before the current statement is executed.</h2>
    <h1>(10) What is the difference between include and require in PHP ?</h1>
    <h2> => include and require are both used to include a file in the current file. The difference is that if the file to be included is not found by require, it will cause a fatal error and halt the execution of the script. If the file to be included is not found by include, a warning will be issued, but the script will continue to execute.</h2>
    <h1>(11) What is the difference between include_once and require_once in PHP ?</h1>
    <h2> => include_once and require_once are both used to include a file in the current file. The difference is that if the file to be included has already been included, include_once will not include it again, but require_once will include it again.</h2>
    <h1>(12) What is the difference between unset and unlink in PHP ?</h1>
    <h2> => unset is used to destroy a variable. unlink is used to delete a file.</h2>
    <h1>(13) What is the difference between session and cookie in PHP ?</h1>
    <h2> => The main difference between sessions and cookies is that sessions are stored on the server, and cookies are stored on the user's computer. Sessions are more secure than cookies because the user cannot manipulate them from the client side.</h2>
    <h1>(14) What is the difference between GET and POST in PHP ?</h1>
    <h2> => GET and POST are two methods to send data from a form to a server. GET sends the data in the URL, while POST sends the data in the HTTP request body. GET is less secure than POST because the data sent is part of the URL. GET is limited to send upto 2048 characters. POST does not have any restriction on data size to be sent. GET can be bookmarked. GET should never be used when dealing with sensitive data. GET is ideal for non-secure data, like query strings in Google.</h2>
    <h1>(15) What is the difference between array_merge and array_combine in PHP ?</h1>
    <h2> => array_merge is used to merge two or more arrays into a single array. array_combine is used to create an array by using one array for keys and another for its values.</h2>
    <h1>(16) What is the difference between array_push and array_pop in PHP ?</h1>
    <h2> => array_push is used to add one or more elements to the end of an array. array_pop is used to remove the last element of an array.</h2>
    <h1>(17) What is the difference between array_shift and array_unshift in PHP ?</h1>
    <h2> => array_shift is used to remove the first element of an array. array_unshift is used to add one or more elements to the beginning of an array.</h2>
    <h1>(18) What is the difference between array_key_exists and in_array in PHP ?</h1>
    <h2> => array_key_exists is used to check if a specified key is present in an array. in_array is used to check if a specified value is present in an array.</h2>
    <h1>(19) What is the difference between array_map and array_walk in PHP ?</h1>
    <h2> => array_map is used to apply a callback function to each element of an array and return the modified array. array_walk is used to apply a callback function to each element of an array but does not return the modified array.</h2>
    <h1>(20) What is the difference between array_search and array_find in PHP ?</h1>
    <h2> => array_search is used to search an array for a specified value and return its key. array_find is used to search an array for a specified value and return the value.</h2>
    <h1>(21) What is the difference between array_reverse and array_flip in PHP ?</h1>
    <h2> => array_reverse is used to reverse the order of elements in an array. array_flip is used to exchange the keys with their associated values in an array.</h2>
    <h1>(22) What is the difference between array_slice and array_splice in PHP ?</h1>
    <h2> => array_slice is used to extract a slice of an array. array_splice is used to remove a portion of an array and replace it with something else.</h2>
    <h1>(23) What is the difference between array_unique and array_values in PHP ?</h1>
    <h2> => array_unique is used to remove duplicate values from an array. array_values is used to return all the values of an array.</h2>
    <h1>(24) What is the difference between array_rand and shuffle in PHP ?</h1>
    <h2> => array_rand is used to pick one or more random keys from an array. shuffle is used to shuffle the elements of an array.</h2>
    <h1>(25) What is the difference between array_sum and array_product in PHP ?</h1>
    <h2> => array_sum is used to calculate the sum of all the values in an array. array_product is used to calculate the product of all the values in an array.</h2>
    <h1>(26) What is the difference between array_count_values and array_column in PHP ?</h1>
    <h2> => array_count_values is used to count all the values of an array. array_column is used to return the values from a single column in an array.</h2>
    <h1>(27) What is the difference between array_chunk and array_combine in PHP ?</h1>
    <h2> => array_chunk is used to split an array into chunks. array_combine is used to create an array by using one array for keys and another for its values.</h2>
    <h1>(28) What is the difference between array_diff and array_diff_assoc in PHP ?</h1>
    <h2> => array_diff is used to compare two or more arrays and return the differences. array_diff_assoc is used to compare two or more arrays and return the differences with keys.</h2>
    <h1>(29) What is the difference between array_fill and array_fill_keys in PHP ?</h1>
    <h2> => array_fill is used to fill an array with values. array_fill_keys is used to fill an array with values, specifying keys.</h2>
    <h1>(30) What is the difference between array_intersect and array_intersect_assoc in PHP ?</h1>
    <h2> => array_intersect is used to compare two or more arrays and return the similarities. array_intersect_assoc is used to compare two or more arrays and return the similarities with keys.</h2>
    <h1>(31) What is the difference between array_map and array_filter in PHP ?</h1>
    <h2> => array_map is used to apply a callback function to each element of an array and return the modified array. array_filter is used to filter the elements of an array using a callback function.</h2>
    <h1>(32) What is the difference between array_merge_recursive and array_replace_recursive in PHP ?</h1>
    <h2> => array_merge_recursive is used to merge two or more arrays into a single array recursively. array_replace_recursive is used to replace the values of the first array with the values from following arrays recursively.</h2>
    <h1>(33) What is the difference between array_multisort and array_push in PHP ?</h1>
    <h2> => array_multisort is used to sort multiple or multi-dimensional arrays. array_push is used to add one or more elements to the end of an array.</h2>
    <h1>(34) What is the difference between array_reverse and array_search in PHP ?</h1>
    <h2> => array_reverse is used to reverse the order of elements in an array. array_search is used to search an array for a specified value and return its key.</h2>
    <h1>(35) What is the difference between array_sum and array_unique in PHP ?</h1>
    <h2> => array_sum is used to calculate the sum of all the values in an array. array_unique is used to remove duplicate values from an array.</h2>
    <h1>(36) What is the difference between array_values and array_walk in PHP ?</h1>
    <h2> => array_values is used to return all the values of an array. array_walk is used to apply a callback function to each element of an array but does not return the modified array.</h2>
    <h1>(37) What is the difference between array_walk_recursive and arsort in PHP ?</h1>
    <h2> => array_walk_recursive is used to apply a user function recursively to every member of an array. arsort is used to sort an array in reverse order and maintain index association.</h2>
    <h1>(38) What is the difference between asort and compact in PHP ?</h1>
    <h2> => asort is used to sort an array and maintain index association. compact is used to create an array containing variables and their values.</h2>
    <h1>(39) What is the difference between count and current in PHP ?</h1>
    <h2> => count is used to count all elements in an array or something in an object. current is used to return the current element in an array.</h2>
    <h1>(40) What is the difference between each and end in PHP ?</h1>
    <h2> => each is used to return the current key and value pair from an array and advance the array cursor. end is used to set the internal pointer of an array to its last element.</h2>
    <h1>(41) What is the difference between extract and in_array in PHP ?</h1>
    <h2> => extract is used to import variables into the local symbol table from an array. in_array is used to check if a specified value is present in an array.</h2>
    <h1>(42) What is the difference between key and krsort in PHP ?</h1>
    <h2> => key is used to fetch a key from an array. krsort is used to sort an array by key in reverse order.</h2>
    <h1>(43) What is the difference between ksort and list in PHP ?</h1>
    <h2> => ksort is used to sort an array by key. list is used to assign variables as if they were an array.</h2>
    <h1>(44) What is the difference between natcasesort and natsort in PHP ?</h1>
    <h2> => natcasesort is used to sort an array using a case-insensitive "natural order" algorithm. natsort is used to sort an array using a "natural order" algorithm.</h2>
    <h1>(45) What is the difference between next and pos in PHP ?</h1>
    <h2> => next is used to advance the internal pointer of an array. pos is used to return the current element in an array.</h2>
    <h1>(46) What is the difference between prev and range in PHP ?</h1>
    <h2> => prev is used to rewind the internal pointer of an array. range is used to create an array containing a range of elements.</h2>
    <h1>(47) What is the difference between reset and rsort in PHP ?</h1>
    <h2> => reset is used to set the internal pointer of an array to its first element. rsort is used to sort an array in reverse order.</h2>
    <h1>(48) What is the difference between shuffle and sizeof in PHP ?</h1>
    <h2> => shuffle is used to shuffle the elements of an array. sizeof is used to count all elements in an array or something in an object.</h2>
    <h1>(49) What is the difference between sort and uasort in PHP ?</h1>
    <h2> => sort is used to sort an array. uasort is used to sort an array with a user-defined comparison function and maintain index association.</h2>
    <h1>(50) What is the difference between uksort and usort in PHP ?</h1>
    <h2> => uksort is used to sort an array by key using a user-defined comparison function. usort is used to sort an array using a user-defined comparison function.</h2>
    <h1>(51) What is the difference between array_column and array_diff_key in PHP ?</h1>
    <h2> => array_column is used to return the values from a single column in an array. array_diff_key is used to compare the keys of two or more arrays and return the differences.</h2>
    <h1>(52) What is the difference between array_diff_uassoc and array_diff_ukey in PHP ?</h1>
    <h2> => array_diff_uassoc is used to compare the keys and values of two or more arrays and return the differences with a user-defined comparison function. array_diff_ukey is used to compare the keys of two or more arrays and return the differences with a user-defined comparison function.</h2>
    <h1>(53) What is the difference between array_key_first and array_key_last in PHP ?</h1>
    <h2> => array_key_first is used to get the first key of an array. array_key_last is used to get the last key of an array.</h2>
    <h1>(54) What is the difference between array_map and array_reduce in PHP ?</h1>
    <h2> => array_map is used to apply a callback function to each element of an array and return the modified array. array_reduce is used to reduce an array to a single value using a callback function.</h2>
    <h1>(55) What is the difference between array_replace and array_replace_recursive in PHP ?</h1>
    <h2> => array_replace is used to replace the values of the first array with the values from following arrays. array_replace_recursive is used to replace the values of the first array with the values from following arrays recursively.</h2>
</body>
</html>