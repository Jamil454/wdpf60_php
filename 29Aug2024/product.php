<?php $conn = new mysqli("localhost:3308", "root","","tclk60")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product above 5000</title>
    <style>
         th,td,tr{
            border: 1px solid;
        }
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h2>Ans to the qu no : 02</h2>
    <h3>Products above 5000</h3>

    <?php 
    $sql = $conn->query("SELECT * FROM product_above_5000");
    


    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Manufacturr ID</th>
        </tr>
        <?php while ($row = $sql->fetch_assoc()){?>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['price']?></td>
                <td><?php echo $row['manufacturer_id']?></td>
         </tr>

            <?php }?>
    </table>
</body>
</html>