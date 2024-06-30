<?php 

$fruits = array("apple", "orange", "banana", "mango");
echo"<pre>";

sort($fruits);
print_r($fruits);

echo "<br>";
rsort($fruits);
print_r($fruits);
?>