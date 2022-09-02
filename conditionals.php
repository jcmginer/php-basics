<?php

$myDate = date("l");
if ($myDate == "Monday") {
    echo "We are on Monday<br>";
}

$myMonth = date("F");
if ($myDate == "October") {
    echo "We are in October<br>";
}


$myMinute = date("i");
if ($myMinute < "10") {
    echo "the current minute is less than 10<br>";
} else if ($myMinute > "15") {
    echo "the current minute is more than 15<br>";
} else
    echo "does not meet any conditions<br>";


$myDate = date("l");
switch ($myDate) {
    case "Monday":
        echo "We are on Monday<br>";
        break;
    case "Tuesday":
        echo "We are on Tuesday<br>";
        break;
    case "Wednesday":
        echo "We are on Wednesday<br>";
        break;
    case "Thursday":
        echo "We are on Thursday<br>";
        break;
    case "Friday":
        echo "We are on Friday<br>";
        break;
    case "Saturday":
        echo "We are on Saturday<br>";
        break;
    case "Sunday":
        echo "We are on Sunday<br>";
        break;
}

?>