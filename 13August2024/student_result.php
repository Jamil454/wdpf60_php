<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student  Result Sheet</title>
    <style>
        table{
            border-collapse: collapse;
        }
        th, tr,td{
            border: 1px solid;
        }
    </style>
</head>
<body>
    <h2>Student Result Sheet</h2>
    <?php 
    $result = ["Saif"=> 50, "Rakib"=> 42, "Jamil"=>45, "Abir"=>40];

    echo "<table>";
    ?>

   <table>
        <tr>
            <th>Student Name</th>
            <th>Obtained Score</th>
        </tr>
        <?php 
        foreach($result as $name=>$score){
            echo "<tr>";
            echo "<td> $name</td>";
            echo "<td> $score</td>";
            echo "</tr>";
        }
        ?>

        <tr>
            <td colspan="2">
                <?php $maxscore = max ($result);
                $student = array_search($maxscore, $result);
                     
                echo "Maximum score $maxscore obatained by $student";
                
                ?>

            </td>
        </tr>
    </table>
</body>
</html>