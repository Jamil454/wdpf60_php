<?php 

session_start();

if(!isset($_SESSION['email'])){
    header("Location:login.php");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>This is  home page</h2>
    <a href="logout.php">Logout</a>
    </form>
</body>
</html>