<?php 

$divisions= [
    "Dhaka" => array(
        "population" => "353,140", 
        "spot" => "Lalabagh",
        "Food"=>"Biriyani"
        ),

    "Rajshahi" => array(
        "population" => "711,263", 
        "spot" => "RU University"),
    "Khulna" => array(
          "population"=>"12,504,145",
          "spot"=>"Sundarban",
          "Food"=>"Shrims"
         ),
   ];
echo $divisions["Khulna"]["Food"];
echo "<br>";
echo $divisions["Dhaka"]["Food"];
echo "<pre>";
print_r($divisions);
?>