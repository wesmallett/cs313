<?php
require_once "../resources/dbConnect.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Scripture List</title>
    </head>

    <body>
    <?php 
    $statement = $db->prepare("SELECT * FROM application_status");
    $statement->execute();

    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        echo "<h1>$row</h1>";
    }
    ?>
    </body>
</html>