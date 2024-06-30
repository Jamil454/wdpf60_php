<?php 

class Employee {
   public $name ;
   public $age ;
   public  $address ;
   public function info (){
    $full = "";
    $full.= "Name:" . $this ->name . "<br>";
    $full.= "Age:" . $this ->age . "<br>";
    $full.= "Address:" . $this ->address;
    return $full;
   }
}   // end of class

$obj1 = new Employee;
$obj1->name = "Jamil";
$obj1->age = "25";
$obj1->address = "Mirpur";
echo $obj1->info();

?>