<?php
//Create a function that given two numbers returns the sum of both.
function sum($a, $b) {
    return $a + $b;
}
echo sum(7, 3);

echo "<br>";

//Create a function that given two numbers returns the multiplication of both.
function multi($a, $b) {
    return $a * $b;
}
echo multi(5, 3);

echo "<br>";

//Create a function that given two numbers returns the division of both.
function div($a, $b) {
    return $a / $b;
}
echo div(7, 2);

echo "<br>";


//Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.
function op($a, $b, $operation) {
switch($operation){
    case "+" :
        return sum($a, $b);
        break;
    case "*" :
        return multi($a, $b);
        break;
    case "/" :
        return div($a, $b);
        break;
    default :
        return "error";
        break;
}

    /* if($operation == "+") {
        return sum($a, $b);
    } else if ($operation == "*") {
        return multi($a, $b);
    } else if ($operation == "/") {
        return div($a, $b);
    } else {
        return "error";
    } */
}
echo op(60, 6, "/");

echo "<br>";


?>