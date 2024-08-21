<?php  require_once("db_config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset style="width: fit-content;">
    <h1>Product Entry</h1>

    <?php 

      $sql ="SELECT * FROM catagoris";
     $cats= $db->query($sql);

      if(isset($_POST['submit'])){
        extract($_POST);
       echo "INSERT INTO product  (id, product_name, product_details, product_price, product_quantity,product_catagory
        ) VALUES (NULL, '$product','$details', '$price', '$quantity','$catagory')";
      
        $sql = "INSERT INTO product  (id, product_name, product_details, product_price, product_quantity,product_catagory
        ) VALUES (NULL, '$product','$details', '$price', '$quantity','$catagory')";

        
        $result= $db->query($sql);
         if($db->affected_rows){
            echo "Successfully Added";
         }else{
            echo "Failed";
         }
     }
    ?>

    <form action="" method="post">
       Product Name: <br> <input type="text" name="product" placeholder="Enter product name"> <br>
       Product Details: <br> <textarea name="details" placeholder="enter details"> </textarea>  <br>
       Product Price: <br>  <input type="text" name="price"  placeholder="enter price"> <br>
       Product Quantity: <br>  <input type="number" name=" quantity"  placeholder="enter  quantity"> <br>
       Product Catagory: <br> <select name="catagory">

       <option value="">Select One</option>
       <?php 
       while ($row =$cats->fetch_assoc()){ ?>

         <option value="<?php echo $row ['cat_id']?>"><?php echo $row ['name']?></option>

         <?php
         }
       ?>
       </select> <br>
         <input type="submit" name="submit" value="SUBMIT"> <br>

    </form>
    </fieldset>

    <a href="all_products.php" > Product List</a>
</body>
</html>