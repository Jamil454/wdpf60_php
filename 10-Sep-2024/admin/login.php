<?php 
require_once "dbconfig.php";
session_start();

if(isset($_POST['login'])){
    $email =$_POST['email'];
    $password =$_POST['password'];
    $password = md5($password);
    $usertype = $_POST['usertype'];
}

if($usertype==1){
    $sql1 = $db->query("SELECT * FROM admin WHERE email ='$email' AND password ='$password'");
    if ($sql1->num_rows){
        // Session
        $_SESSION['email'] = $email;
        $_SESSION['utype'] = $usertype;

        // Redirect
        header("Location:dashboard.php");
    }
}
if($usertype==2){
    $sql2 = $db->query("SELECT * FROM doctors WHERE docEmail ='$email' AND password ='$password'");
    echo $sql2->num_rows;
    // Session
    $_SESSION['email'] = $email;
    $_SESSION['utype'] = $usertype;
    header("Location:doctor_dashboard.php");

    // Redirect
}
if($usertype==3){
    $sql3 = $db->query("SELECT * FROM users WHERE email ='$email' AND password ='$password'");
    echo $sql3->num_rows;
    // Session
    $_SESSION['email'] = $email;
    $_SESSION['utype'] = $usertype;
    header("Location:patient_dashboard.php");

    // Redirect
}
?>