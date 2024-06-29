<?php 

$fruits = array("Mango", "Apple", "Orange", "Banana");

echo "<ol>";
foreach ($fruits as $x){
    echo "<li>".$x ."</li>";
}

echo "</ol>";
echo "<hr>";

//Associative array

$students = array ("Jamil"=>20, "Rakib"=>25, "Saif"=>22, "Saleh"=>24);

foreach( $students as $name=>$age){
    echo "$name:$age  <br>";

}
?>