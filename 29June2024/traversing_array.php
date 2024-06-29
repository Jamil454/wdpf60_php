<?php 

$country = array(
    "Bangladesh"=> "Dhaka",
    "Srilanka"=> "Colombo",
    "Uganda"=> "Kampala",
    "Nepal"=> "Kathmondu",
    "Maldives"=> "Maley",
);

while ($item = key($country)) {

echo$item . "<br>";
next($country);

}


?>