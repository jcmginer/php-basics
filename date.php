<?php
// Current date format Y-m-d
$myDate = new DateTime();
    echo date_format ($myDate, "Y-m-d");

    echo "<br>";
// Current date any format
    echo date_format ($myDate, "d-M-Y");

    echo "<br>";
// Current day
    echo date_format ($myDate, "l");

    echo "<br>";
// Current month
    echo date_format ($myDate, "n");

    echo "<br>";
// Current minute
    echo date_format ($myDate, "i");

    echo "<br>";
?>