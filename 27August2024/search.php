<?php $conn = new mysqli("localhost:3308", "root", "",  "classicmodels")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search page</title>
</head>
<body>
    <h3> Search Products</h3>
    <form action="" method="get">
    <input type="text" name="term" placeholder="Search Here">
    <input type="submit" name="search" value="SEARCH">

 </form>
 
    <?php 
    if (isset($_GET['search'])){
     $term = $_GET['term'];
     
    $result = $conn->query ("SELECT productCode,productName,buyPrice FROM  products WHERE
     productName LIKE ('%$term%')");
    $records = $result->num_rows;

    echo " <P>We have searched <b>'$term'</b> word & found <b>$records</b> records</P>";
    while ($row = $result->fetch_object()){
        echo "product Code:". $row->productCode ."productName:". $row->productName . "productPrice:". $row->buyPrice. "<hr>";
    }
    }
    
    ?>
    
</body>
</html>