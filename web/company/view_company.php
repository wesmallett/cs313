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

    // $statement = $db->prepare("SELECT * FROM application_status");
    // $statement->execute();

    // while($row = $statement->fetch(PDO::FETCH_ASSOC)){
    //     $status = $row['status'];
    //     echo "<h1>$status</h1>";
    // }
    ?>
    </body>
</html>