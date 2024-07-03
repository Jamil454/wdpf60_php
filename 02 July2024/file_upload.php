<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>

<?php 

if(isset($_POST['submit'])){

$temp= $_FILES['photo']['tmp_name'];
$filename= $_FILES['photo']['name']; 
$filedata = pathinfo($filename);
$file_ext = strtolower($filedata['extension']); //show file extension(jpg,png,jpeg...etc)
$allowed_ext=["jpg","png","jpeg"];
$filesize= $_FILES['photo']['size'];
$allowedsize =307200;
$path = "photos" . "/" . $filename;

$errors = [];

if($filesize>$allowedsize){
    $errors[] = "Within 300 KB is allowed";
}
if(!in_array($file_ext,$allowed_ext)){
    $errors[] = "Allowed file types jpg, png, jpeg";

}
if(count($errors)>0){
    foreach( $errors as $err ){
        echo $err . "<br>";

    }
}
else{
   $status= move_uploaded_file($temp, $path);
    if(  $status) echo "Successfully Uploaded";
}

}

?>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="name"> <br>
    <input type="text" name="email"> <br>
    <input type="file" name="photo"> <br>
    <input type="submit" name="submit" value="SEND"> <br>

    
    </form>
</body>
</html>