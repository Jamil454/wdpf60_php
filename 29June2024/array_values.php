<?php 

$students = array ("Jamil"=>20, "Rakib"=>25, "Saif"=>22, "Saleh"=>24);

$scores  = array_values($students);
echo "<pre>";
print_r($scores);

?>