<?php 

 $id = $_GET ['id'];

 require_once("db_config.php");

 $result = $db-> query("DELETE FROM product WHERE id = '$id'");

 if($result){

 }

 header("Location:all_products.php");

 ?>