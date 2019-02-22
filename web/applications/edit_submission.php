<?php
require_once "../resources/dbConnect.php";
require "../data/applicationSubmissionData.php";
require "../data/companyData.php";
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
       $submission = getSubmissionById($db,intval($_POST['submission']));
       ?>
       <label>Job Title</label><input type='text' value=<?=$submission->getJobtitle()?> />
    </body>
</html>