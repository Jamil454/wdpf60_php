<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
if (isset($_REQUEST['submit'])) {
    $stid = $_REQUEST['stid'];

    $datas = file ('result.txt');
    // echo'<pre>';
    // print_r($datas);

    foreach ($datas as $data) {
      $line =  explode("|", $data);
      list  ($id, $name, $score, $result)  = $line;
      if ($id == $stid) {
        echo "ID: $id <br> NAME: $name <br> SCORE: $score <br> RESULT:  $result ";
    
    }

    }
}
?>
    
<form action="">
    <select name="stid">
    <option value="">select one</option>
    <option value="1">Jamil</option>
    <option value="2">Rakib</option>
    <option value="3">Saif</option>
</select>

<input type="submit" name="submit" value="Show Result">
</form>
</body>
</html>