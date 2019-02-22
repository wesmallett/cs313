<?php
require_once "../resources/dbConnect.php";
require "../data/applicationSubmissionData.php";
require "../data/companyData.php";
include_once "../models/company.php";

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
       $submission = getCompanyById($db,intval($_POST['companyId']));
       ?>
       <label>Job Title</label><input type='text' id='job-title' value=<?=$submission->getJobtitle()?> />
       <label>Company</label><input type='text' id='company' value=<?=$submission->getJobtitle()?> />
    </body>
</html>