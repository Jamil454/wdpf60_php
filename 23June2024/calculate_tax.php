<?php 
function calculateTax($price, $tax){
    $total = $price + $price *  $tax;
    return $total;
}
echo calculateTax(10,5);
echo "<hr>";
?>


<?php 
function calTax($price, $tax=0.5){
    $total = $price + $price *  $tax;
    return $total;
}
echo calTax(10);

?>