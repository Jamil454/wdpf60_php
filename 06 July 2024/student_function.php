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

    show_result($stid);

}
    function show_result($stid){

    $datas = file ('result.txt');
   

    foreach ($datas as $data) {
      $line =  explode("|", $data);
      list  ($id, $name, $score, $result)  = $line;
      if ($id == $stid) {
        $output =  "ID:" . $id ."NAME:" . $name ."SCORE:" . $score ."RESULT:" .  $result ;
    
    }

    }
    echo $output;
}

?>
    
<form action="">
    <select name="stid">
    <option value="">select one</option>
    <option value="1">Saif</option>
    <option value="2">Mohiuddin</option>
    <option value="3">Abir</option>
</select>

<input type="submit" name="submit" value="Show Result">
</form>
</body>
</html>