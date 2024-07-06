<?php

 $foods = array("pasta", "steak", "fish", "potatoes","pizza","burger"," kabab ");
 $food = preg_grep("/^p/", $foods);

 print_r($food);
?>