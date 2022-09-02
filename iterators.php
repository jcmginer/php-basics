<?php

for ($i = 1; $i <= 10; $i++) {
    echo "$i<br>";
}

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}

$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

$num = 7;

do {
  echo "The number is: $num <br>";
  $num++;
} while ($num <= 5);

?>