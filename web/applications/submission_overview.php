<?php
require_once "../resources/dbConnect.php";
require "../data/applicationSubmissionData.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Application Submissions</title>
        <link rel="stylesheet" href="../stylings.css" type="text/css">
    </head>

    <body>

       <?php 
       $submission = getSubmissionById($db,$_POST['id']);
       ?>
       <h1><?=$submission['companyname']?></h1>;
    </body>
</html>