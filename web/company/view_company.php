<?php
require_once "../resources/dbConnect.php";
require "../data/companyData.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Companies</title>
    </head>

    <body>
    <?php 
    $result = getAllStatus($db);
    echo $result;

    foreach($result as $row){
        $status = $row['status'];
        echo "<h1>$status</h1>";
    }
    ?>
    </body>
</html>