<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Country and Capital where country were Sorting</h2>

    <?php 
    $countries = [
        "Bangladesh"=>"Dhaka",
        "Srilanka"=>"Colombo",
        "Uganda"=>"Kampala",
        "China"=>"Beijing",
        "Hungery"=>"Budapest",
        "Japan"=>"Tokyo", ];

        foreach($countries as $country => $capital){

            echo "$country : $capital <br>";
        }
        echo "<hr>";
     ksort($countries);

    foreach($countries as $country => $capital){

        echo "$country : $capital <br>";
    }
    
    ?>
</body>
</html>