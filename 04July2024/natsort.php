<?php 

  $files = array ('picture1.jpg', 'picture10.jpg', 'Picture2.jpg', 'picture20.jpg','picture5.jpg',
'picture15.jpg','picture8.jpg', 'Picture22.jpg');
 

 echo"<pre>";
 print_r( $files );

 natsort( $files );

 echo "<hr>";
 print_r( $files );
 
 echo "<hr>";
 natcasesort( $files );
 print_r( $files );
?>