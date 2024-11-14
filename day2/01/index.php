<?php
$completed = true;

$score = 75;

$price = 0.99;

$greeting = "Hello";

var_dump($completed);
var_dump($score);
var_dump($price);
var_dump($greeting);

function sum(int $x, int $y) {
  return $x + $y;
}

echo sum(2, 3);
echo sum("2", 3);
?>
