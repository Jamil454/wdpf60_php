<?php

$x = 50;
$output=(float) $x;

var_dump($output);
echo gettype($output); 

echo"<hr>";
$name="Rakib";
$output=(integer) $name;
echo $output; 
echo"<hr>";

$number=50.45;
var_dump($number);
echo "<br>";
 $output= (string) $number; 
 var_dump($output);
echo"<hr>";


$name=(bool)"Rakib";
echo $name; 
echo"<hr>";

$score = 1114;
$scoreboard = (array) $score;
echo $scoreboard[0]; // Outputs 1114
echo "<br>";
var_dump($scoreboard);

echo"<hr>";


$model = "Toyota";
$obj = (object) $model;
print_r($obj);
print $obj->scalar; // returns "Toyota"






?>