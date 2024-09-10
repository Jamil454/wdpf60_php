<?php $db = new mysqli("localhost:3308", "root","","evi1")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer</title>
</head>
<body>
    <h2>Ans to qu no: 03</h2>
    <h3>Manufacturer List</h3>

    <?php
    if(isset($_POST['submit'])){
        $man = $_POST['manu'];
        $sql2 = "DELETE FROM manufacturer WHERE id='$man'";
        $delete = $db->query($sql2);
        if($delete){
            echo "Successfully deleted";
        }else{
            echo "Failed";
        }

    }
    $sql = "SELECT * FROM manufacturer";
    $my =$db->query($sql);
    ?>

    <form action="" method="post">
        <select name="manu">

            <option value="">Select One</option>
            <?php while ($row=$my->fetch_assoc()){?>
            <option value="<?php echo $row['id']?>"><?php echo $row['id']?><?php echo $row['name']?></option>
            <?php } ?>
        </select>
        <input type="submit"name="submit" value="DELETE" >
    </form> <br>
    <a href="product.php">Product List</a>
</body>
</html>