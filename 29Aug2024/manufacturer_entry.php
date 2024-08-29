<?php $conn = new mysqli("localhost:3308", "root","","tclk60")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ans to the qu No:02</h2>
    <h3>Manufacturer Entry</h3>
    <?php 
    if(isset($_POST['submit'])){
        extract($_POST);
        if($conn->query("CALL add_manufacturer('$name', '$add','$contact')")){
            echo "Successfully added";
        }else{
            echo "Failed to add";
        }
    }
    ?>

    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter Manufacturer name"> <br>
        <textarea name="add" id="" placeholder="Enter Address"></textarea><br>
        <input type="text" name="contact"><br>
        <input type="submit" name="submit" value="Add">
    </form>
    <a href="manufacturer.php">Manufacturer List</a>
</body>
</html>