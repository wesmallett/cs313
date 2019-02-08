<?php
include ("../data/companyData.php");
$db = get_db();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Companies</title>
    </head>

    <body>
    <?php 
    $result = getAllStatus();
    echo $result;
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        $status = $row['status'];
        echo "<h1>$status</h1>";
    }

    $result2 = getAllStatus2();
    echo $result2;
    while($row2 = $result2->fetch(PDO::FETCH_ASSOC)){
        $status2 = $row2['status'];
        echo "<h1>$status2</h1>";
    }
    ?>
    </body>
</html>