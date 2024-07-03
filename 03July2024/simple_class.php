<?php
class SimpleClass
{
    public $var = 'a default value'; // public property declaration
   public const a="America"; // private constant Declaration
 
    // public method declaration
    public function displayVar() {
        echo $this->var . "<br>";
    }
    public function displayConst() {
        echo self :: a ;
    }
}
$obj1 = new SimpleClass;
echo $obj1 -> var . "<br>";
echo $obj1 ::a . "<br>";          //  :: is used instead of -> (scope resolution )
 $obj1 -> displayVar() . "<br>";
 $obj1 -> displayConst();
 echo "<hr>";

 


?>