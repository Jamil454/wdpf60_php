<?php 

$students = array ("Jamil"=>20, "Rakib"=>25, "Saif"=>22, "Saleh"=>24);

if(array_key_exists("Rakib",$students )){
    echo "Rakib has {$students['Rakib']} girlfriends";
}
else{
  echo "Not found";
}
?>