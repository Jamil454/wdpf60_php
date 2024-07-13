<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Max and Min number check</h1>

    


    <?php 
    
    if(isset($_POST['submit'])){
        $numbers = $_POST["numbers"];
        $numArray = explode("," ,  $numbers);

        $max =  $numArray[0];
        $min =  $numArray[0];

        for($i = 0; $i<count( $numArray ); $i++){

            if($numArray[$i]>$max){
                $max = $numArray [$i];
                
            }
            if($numArray[$i]<$min){
                $min = $numArray [$i];
               
            }

        }
        echo "The max number from $numbers is <b> $max </b> <br> The min number from $numbers is <b> $min </b> ";

       }
    
    ?>
<form action="" method="post">

    <input type="text" name="numbers" placeholder="Enter number"> <br>
    <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>