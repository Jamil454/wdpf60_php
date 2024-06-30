<?php 

$state = array(0 => "Delaware", 1 => "Pennsylvania", 2 => "New Jersey");

echo"<pre>";

print_r(array_reverse($state, 1));
echo "<hr>";


$state = array(0 => "Delaware", 1 => "Pennsylvania", 2 => "New Jersey");
echo "<pre>";
$state = array_flip($state);
print_r($state);

?>