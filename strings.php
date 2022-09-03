<?php
//Print a text string.
print "printing text" . "<br>";

//Concatenate a previously declared variable in a text string.
$printString = "printing text";
print $printString;
echo "<br>";
print $printString . " other text.<br>";

//Execute the function that allows you to replace text in a string (case sensitive).
// Replaced if exactly the same. Identifies if what you are looking for is lowercase or uppercase.
echo str_replace("Hello" /* search "o" in the string*/ ,"Bye" /*replace it with a "P" in the string*/ ,"Hello world!<br>");

//Execute the function that allows you to replace text in a string (without taking into account upper / lower case).
//Replaced without checking if it is uppercase or lowercase.
echo str_ireplace("hELLO" /* search "O" in the string*/ ,"Bye" /*replace it with a "P" in the string*/ ,"Hello world!<br>");


//Execute the function that allows you to write a text N times.
$str = "Assembler ";
// Repeated string
print_r(str_repeat($str, 7));
echo "<br>";

//Execute the function that allows to obtain the length of a text string.
$str = "Assembler";
    // prints the length of the string
    // including the space
    echo strlen($str);
    echo "<br>";

//Executes the function that allows to obtain the position of the first occurrence of a text within a text string.
echo strpos("Looking for the first position of php, within this string.","php");
echo "<br>";

//Execute the function that allows a text string to be capitalized.
$stringUp = "Capitalizing all this text.";
$stringUp = strtoupper($stringUp);
echo $stringUp;
echo "<br>";

//Execute the function that allows you to transform a text string to lowercase.
$stringLow = "IN LOWERCASE ALL THIS TEXT.";
$stringLow = strtolower($stringLow);
echo $stringLow;
echo "<br>";

//Execute the function that allows to obtain a text substring from a given position.
$stringSearch = "What text substring is at position nine?";
echo substr($stringSearch, 9);
echo "<br>";


?>