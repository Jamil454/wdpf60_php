
<a href="get_post.php? name=Jamil&email=jamil454@gmail.com&address=Faridpur&ID=1283441">Click Here</a> <br>

<?php

// echo"<pre>";
//  print_r($_GET);
//  print_r($_POST);
// echo"</pre>";

// echo $_POST['email'];        // show error system
// echo '<br>';
// echo $_POST['pswd'];
// echo"<hr>";
?>

<?php


if (isset($_POST['subscribe'])){                             // error free system


echo "<br> Email:". $_POST['email'];      // we can use _REQUEST instead of _POST/GET
echo '<br>';
echo"<br> Password:". $_POST['pswd'];
}
echo"<hr>";

?>
information:
<form action="" method="post">
<br>
 Email address:<br>
<input type="text" name="email" size="20" maxlength="50" value=""/>
<br>
 Password:<br>
<input type="password" name="pswd" size="20" maxlength="15" value=""/><br>
<input type="submit" name="subscribe" value="subscribe!" />
</form>
