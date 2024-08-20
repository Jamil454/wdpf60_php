<?php  require_once("db_config.php");  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All products</title>
    <style>
        th, tr,td{
            border: 1px solid;
        }
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h3> Product List</h3>

    <?php 
  $sql = "SELECT * FROM Product";
  $data = $db-> query($sql); ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Product</th>
            <th>Details</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
    <?php 
  while($row = $data ->fetch_assoc()){ ?>
    
    <tr>
        <td> <?php echo $row ['id']?> </td>
        <td> <?php echo $row ['product_name']?> </td>
        <td> <?php echo $row ['product_details']?> </td>
        <td> <?php echo $row ['product_price']?> </td>
        <td> <?php echo $row ['product_quantity']?> </td>
        <td> <a onclick=" return confirm('Are you sure to delete')" href="product_delete.php?id=<?php echo $row ['id']?>"> <img src="bin.jpg" alt= "" width= "15"> </a> </td>
    </tr>
  
 <?php }
  
//   echo "<pre>";
//   print_r($row);
    
    ?>
    </table>
    <a href="product_entry.php"> New Product</a>
</body>
</html>