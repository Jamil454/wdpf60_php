<?php
$a = "123";
$b = "456";
echo $a + $b . "<br>";
echo $a . $b . "<br>";

?>

<?php
ini_set("max_execution_time",180); //we can increase and decrease execution time
$a = "123ABC";
$b = "456";
echo $a + $b . "<br>";
echo $a . $b . "<br>";

?>

<?php
ini_set("display_errors",0);   // turn off display error (0 for current page,and 1 for next page.......etc)
$a = "ABC123";
$b = "456";
echo $a + $b . "<br>";
echo $a . $b . "<br>";

?>