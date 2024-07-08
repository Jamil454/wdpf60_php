
<?php
class test{
    public $name;
    private $mobile;
    function __construct($name, $mobile){
        $this->name = $name;
        $this->mobile = $mobile;
    }
}
echo "<pre>";
$obj1 = new test("Farhaan" , "01700000000");
$obj2 = clone $obj1; //Copy of the object
$obj2->name = "Habibr";
print_r($obj1);
print_r($obj2);



echo"<hr>";

class test2{
    public $name;
    private $mobile;
    function __construct($name, $mobile){
        $this->name = $name;
        $this->mobile = $mobile;
    }
    public function __clone(){
        echo "During Cloning I'm only Executing! And I can change anything\n";
        $this->mobile="01922009988";
    }
}
echo "<pre>";

$obj1 = new test2("Farhaan" , "01700000000");
$obj2 = clone $obj1; //Copy of the object
$obj2->name = "Habibr";

print_r($obj1);
print_r($obj2);
?>