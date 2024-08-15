<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload using oop</title>
</head>
<body>

</body>
    <?php

     if(isset($_POST['submit'])){
      $info =($_FILES['photo']);
       $obj = new File($info);
       $obj->upload();
    }

class File {
    public $fileinfo;
    public function __construct($x){
        $this->fileinfo = $x;
    }
    public function upload(){
     $info = $this->fileinfo;
    $name = $info['name'];
    $tmpName = $info['tmp_name'];
    $filesize = $info['size'];
    $allowedsize =512000;   //500kb
    $allowedtypes=["jpg", "png","pdf", "docx",];
    $errors = array();

    $data = pathinfo( $name);
    $ext=strtolower($data['extension']);

    if($filesize> $allowedsize){
        $errors[] = "File size must be within 500kb";

    }
    if(!in_array($ext, $allowedtypes)){
        $errors[] = "File type must be jpg, png, pdf, docx";

    }
    if(count($errors)>0){
        foreach($errors as $err){
            echo $err . "<br>";

        }
       } else {
        if(move_uploaded_file($tmpName, "uploads/". $name)){
            echo "Uploaded successfully";
       
    }

    }
}
}
    ?>
    <form method="post"  enctype="multipart/form-data">
    <input type="file" name="photo"> <br>
    <input type="submit" name="submit" value="UPLOAD">

    </form>
</body>
</html>