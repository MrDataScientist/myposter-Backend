<?php
for ($x = 1; $x <= 100; $x += 1) {
switch ($x) {
case $x % 15 == 0:
$zoo = "beide\n";
break;

case $x % 5 == 0:
$zoo = "fünf\n";
break;

case $x % 3 == 0:
$zoo = "drei\n";
break;

default:
$zoo = $x."\n";
}

echo $zoo;
}
?>
