<?php
//swap two numbers without using third variable
//bitwis xor
$a=5;
$b=9;

$a=$a^$b;
$b=$a^$b;
$a=$a^$b;

echo "value of a is ".$a." value of b is ".$b;

?>
