<?php


 // Open a text file for reading purposes
 $fh = fopen("file/user.txt", 'r');


 // While the end-of-file hasn't been reached, retrieve the next line
 while (!feof($fh)){
  echo fgets($fh) . "<br>";
}
 // Close the file
 fclose($fh);
 echo"<hr>";

?>

<?php 

  $fh = fopen("file/user.txt", 'a');
  fwrite($fh,'Hello! Are Rakib ?');

 fclose($fh);

 $fh = fopen("file/user.txt", 'r');
 

  while (!feof($fh)){
    echo fgets($fh) . "<br>";
  }
   fclose($fh);
//    unlink("file/user.txt");

?>