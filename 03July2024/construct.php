<?php
class oop{

    private $name ;
    private $age ;
 public function __construct($name , $age){
    $this->name = $name ;
    $this->age = $age ;
 }
 public function sayHello(){
     echo "Hello" . $this->name;
 }
 
 public function __destruct(){
    echo "<br>I'm about to disappear - bye bye!";
}
}
$obj=new oop ("Jamil" , 25); 
print_r($obj);
echo"<pre>";

  echo "<br>";
 $obj->sayHello(); 
?>