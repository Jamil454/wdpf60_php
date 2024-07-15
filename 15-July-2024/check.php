<?php 

$userEmail ="rakib@gmail.com";
$userPass ="123456";

$email = $_POST['email'];
$password =$_POST['pass'];

if($userEmail==$email && $userPass ==$password){

    session_start();
    $_SESSION['email'] = $email;
    header("Location:ho.php");

}else{
    header("Location:login.php");
}

?>