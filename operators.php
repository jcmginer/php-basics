<?php

#PHP Operators

$x = 20;
$x += 100;

echo "$x<br>";


$i = 50;
$i -= 30;

echo "$i<br>";

$a = 35;
$a *= 3;

echo "$a<br>";

$e = 24;
$e /= 2;

echo "$e<br>";

$y = 17;
$y %= 2;

echo "$y<br>";


#PHP Comparison Operators

$x = 100; //type number
$y = "100"; //type string

var_dump($x == $y); //Equal

$q = 100; //type number
$s = "100"; //type string

var_dump($q != $s);//Unequal

$x = 10;
$y = 50;

var_dump($x < $y);

$x = 100;
$y = 500;

var_dump($x > $y);

$x = 60;
$y = 50;

var_dump($x <= $y);

$x = 50;
$y = 50;

var_dump($x >= $y);


// PHP Logical Operators

// &&
$x = 100;
$y = 50;

if ($x == 100 && $y == 50) {
    echo "<br>Hello world with &&<br>";
}

// and
$x = 100;
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world with And<br>";
}

// ||
$x = 100;
$y = 50;

if ($x == 100 || $y == 80) {
    echo "Hello world with ||<br>";
}

// or
$x = 100;
$y = 50;

if ($x == 100 or $y == 80) {
    echo "Hello world with Or<br>";
}

// ! (NOT)

$x = 100;

if ($x !== 90) {
    echo "Hello world with (!)<br>";
}

// xor

$x = 100;
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hello world with Xor<br>";
}


?>