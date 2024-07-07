<?php

 $drive = 'H:';

$free = disk_free_space($drive)/1024/1024/1024;
$total =  disk_total_space($drive)/1024/1024/1024;
$used = $total - $free;
echo $used;



?>