<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Registration Form</h2>

    <?php
    if(isset($_REQUEST['submit'])){
        $msg = form_validation();
        if($msg){
            echo "<ul>";
            foreach($msg as $m){
                echo "<li>$m</li>";
                
            }
            echo "</ul>";
        }else {
            echo "Validation Ok";
        }
    }
    function form_validation(){
        $errors =[];
        
         $fullname= $_REQUEST['fullname'];
        if($fullname==""){
            $errors []= "You must enter fullname";
        }

        if(isset($_REQUEST['gender'])){
        $gender= $_REQUEST['gender'];
        if($gender==""){
            $errors []= "You must enter gender";
        }

       $address = $_REQUEST['address'];
         if($address==""){
            $errors []= "You must enter address";

        $district = $_REQUEST['district'];
        if($district==""){
            $errors []= "You must enter district";
        } 
        $hobbies= $_REQUEST['hobbies'];
        if(empty($hobbies)){
            $errors []= "You must select one hobby";
        }
        return  $errors ;
    }
}
}
    ?>
    <fieldset >
    <form action="" method="post">
        <input type="text" name="fullname" placeholder="Enter your name"> <br>
        Gender: <br>
        <input type="radio" name="gender" value="male" checked> Male 
        <input type="radio" name="gender" value="female"> Female <br>
        District: <br>
        <select name="district" id="">
            <option value="">Select One</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Khulna">Khulna </option>
            <option value="Faridpur">Faridpur </option>
        </select> <br>
        Hobbies: <br>
        <input type="checkbox" name="hobbies[]" value="cricket" checked>Cricket
        <input type="checkbox" name="hobbies[]" value="footbal">Footbal
        <input type="checkbox" name="hobbies[]" value="hockey">Hockey
        <input type="checkbox" name="hobbies[]" value="tennis">Tennis <br> 
        Address: <br>
        <textarea name="address"  placeholder="Enter address"></textarea><br>
        <input type="submit" name="submit" value="REGISTER">
    </form></fieldset>
</body>
</html>