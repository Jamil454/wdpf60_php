<?php 

$capitals = ["Bangladesh"=>"Dhaka", "Srilanka" =>"Colombo", "Nepal"=>"Kathmondu", 
"Australia"=>"Canbera","Newzeland"=>"Waylington"];

echo"<pre>";
print_r($capitals);

//  ksort($capitals);
krsort($capitals);

echo"<hr>";
print_r($capitals);

?>