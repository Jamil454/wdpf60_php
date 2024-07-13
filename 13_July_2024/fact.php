<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if(isset($_POST['submit'])) {

 $number = $_POST['number'];
 echo facto($number);
}
 function facto($num){
     $num = $_POST['number'];
     $fact = 1 ;
    for( $i = $num; $i>=1; $i--){
        $fact = $fact * $i;
    }
    return "The factorial of " . $num . " is " . $fact;
    }

?>
<form action="" method="post">

<input type="text" name="number">
<input type="submit" name="submit" value="Check">

</form>
</body>
</html>