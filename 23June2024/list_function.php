<?php
 function userProfile(){
    $user[] = "Jamil Hossain";
    $user[] = "jamil@gmail.com";
    $user []= "English";
    return $user;
 }
 list($name, $email, $language) = userProfile();
 echo "Name: {$name}<br> email: {$email}<br> language: {$language}";
?>
