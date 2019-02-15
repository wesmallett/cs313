<?php
require_once "../resources/dbConnect.php";
require "../data/applicationSubmissionData.php";
include_once "../models/applicationSubmission.php";

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
       $submission = getSubmissionById($db,intval($_GET['submissionId']));
       
       foreach($submission as $applicationSubmission){
           echo $applicationSubmission->getCompany();
       }
       ?>
       <h1><?=$submission['company']?></h1>
    </body>
</html>