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
       echo $_GET['submissionId'];
       $submission = getSubmissionById($db,intval($_GET['submissionId']));
       echo $submission;
       ?>
       <h1><?=$submission['company']?></h1>;
    </body>
</html>