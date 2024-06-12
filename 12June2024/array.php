<?php 

//Numeric index array 
$rivers = array("Padma", "Meghna", "Jamuna", "shurma");

echo"<pre>";
 
print_r($rivers); 

// $rivers[]= "Tista";
// $rivers[]= "Gomoti";

$rivers[10]= "Tista";
$rivers[11]= "Gomoti";
print_r($rivers); 
echo"<hr>";

//Associative array

//$capitals = array("Bangladesh"=>"Dhaka", "Srilanka" =>"Colombo", "Nepal"=>"Kathmondu");
$capitals = ["Bangladesh"=>"Dhaka", "Srilanka" =>"Colombo", "Nepal"=>"Kathmondu"];

$capitals["Bhutan"]="Thimpu";
print_r($capitals);

?>