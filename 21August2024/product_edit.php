
<?php require_once("db_config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset style="width: fit-content;">
    <h1>Product edit</h1>

    <?php 
      $id = $_REQUEST['id'];
     
      if(isset($_POST['update'])){
        extract($_POST);
      
        $sql = "UPDATE  product SET product_name = '$product',  product_details = '$details', product_price = '$price', product_quantity= '$quantity' WHERE  id = '$id'";
       
        $db->query($sql);
         if($db->affected_rows){
            echo "Successfully Updated";
         }else{
            echo "Failed";
         }
     } 

     $sql = "SELECT * FROM product WHERE id = '$id'";
     $data =  $db->query($sql);
     $row = $data->fetch_object();

    ?>

    <form action="" method="post">
       Product Name: <br> <input type="text" name="product" placeholder="Enter product name" value="<?php echo
        $row->product_name?>"> <br>
       Product Details: <br> <textarea name="details" placeholder="enter details"><?php echo
        $row->product_details?> </textarea>  <br>
       Product Price: <br>  <input type="text" name="price"  placeholder="enter price" value="<?php echo
        $row->product_price?>"> <br>
       Product Quantity: <br>  <input type="number" name=" quantity"  placeholder="enter  quantity" value="<?php echo
        $row->product_quantity?>"> <br>
         <input type="submit" name="update" value="UPDATE"> <br>
         <input type="hidden" name="id" value="<?php echo $id?>">

    </form>
    </fieldset>

    <a href="all_products.php" > Product List</a>
</body>
</html>