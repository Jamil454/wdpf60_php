<?php

 $drive = 'H:';

 echo disk_free_space($drive)/1024/1024/1024;
 echo "<hr>";
 $drive = 'D:';

 echo disk_free_space($drive)/1024/1024/1024;
 echo "<hr>";


?>