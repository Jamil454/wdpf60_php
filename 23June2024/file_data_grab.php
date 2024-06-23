<?php 

$data = file ("users.txt");
echo"<pre>";
print_r($data);
echo "<hr>";

echo "<table border= '1'>";
echo "<caption> Employee Information</caption>";
echo "<tr><th>Name</th><th>Profession</th> <th>Color</th></tr>";

foreach($data as $item ){

  $line =  explode("|" , $item);
    list($name, $prof, $color) = $line ;
    echo "<tr><td>$name</td><td>$prof</td> <td>$color</td></tr>";

    // echo "<pre>";

    // print_r($line ). "<br>";

    // print $item . "<br>";

}
?>