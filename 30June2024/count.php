<?php 

$fruits = array("apple", "orange", "banana");
echo count($fruits);

echo "<hr>";
$locations = array("Italy", "Amsterdam", array("Boston","Des Moines"),
"Miami");
echo count($locations, 1);

echo "<hr>";
 echo sizeof($locations);
?>