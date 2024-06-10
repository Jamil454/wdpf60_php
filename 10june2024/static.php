<?php 
function myTest() {
    static $x = 0;
    echo $x;
    $x+=7;
  // $x++;
  }
  
  myTest();
  echo"<br>";
  myTest();
  echo"<br>";
  myTest();
  echo"<br>";
  myTest();
  ?>