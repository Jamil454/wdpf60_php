<?php 

$password = "12345";
$password1 = "456789";

if (strcmp($password, $password1)== 0){
    echo "Password Matched";
}else{
    echo "Not Matched";
}

echo"<hr>";

$password = "abcdE";
$password1 = "abcde";

if (strcasecmp($password, $password1)== 0){
    echo "Password Matched";
}else{
    echo "Not Matched";
}
?>