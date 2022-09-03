<?php
//Define a simple array composed of text strings
$arrayString = ['Simple', 'array', '.'];
var_dump($arrayString);

echo "<br>";

//Define a simple array consisting of whole numbers and decimal numbers.
$arrayNum = [7, 7.2, 9];
var_dump($arrayNum);

echo "<br>";

//Define a multidimensional array.
$arrayMultidim = [
    "Multidimensional",
    ["a", "b", "c"],
    [7, 7.2, 9]
];
var_dump($arrayMultidim);

echo "<br>";

//Execute the function that allows to obtain the length of an array.
$arrayLength = count($arrayString);
echo $arrayLength;

echo "<br>";


//Execute the function that allows to obtain the combination of two arrays.
$arrayCombi = array_merge($arrayString, $arrayNum);
print_r(array_merge($arrayString, $arrayNum));

echo "<br>";
var_dump($arrayCombi);

echo "<br>";

//Execute the function that once is given an array return the last element of it.
$arrayLastElement = end($arrayNum);
echo $arrayLastElement;

echo "<br>";

//Execute the function that once is given an array add a new element to the array in question.
$arrayAddElement = array_push($arrayNum, 12, 15.3);
print_r($arrayNum);
echo "<br>";
var_dump($arrayNum);
echo "<br>";

echo $arrayAddElement;
echo "<br>";




?>