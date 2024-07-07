<?php

 $file = 'file/user.txt';
 echo fileatime($file);
 echo "<hr>";

 echo "Last Changed Time:" . date("m-d-y g:i:sa", filectime($file));
 echo "<hr>";

 

 echo " Last Modified Time:" . date("m-d-y g:i:sa", fileatime($file));
 echo "<hr>";
 
 echo " Last Access Time:" . date("m-d-y g:i:sa", filemtime($file));
 



?>