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
       $submission = getSubmissionById($db,intval($_GET['submissionId']));
       ?>
       <label>Job Title</label><?=$submission->getJobtitle()?>
       <label>Company</label><?=$submission->getCompany()?>
       <?= $name = $submission->getCompany();
       $company = getCompanyByName($db,$name);?>
       <?=$company->getStreetaddress()?>
       <?=$company->getCity()?>
       <?=$company->getState()?>
       <?=$company->getZipcode()?>
       <?=$company->getPointofcontact()?>
       <?=$company->getEmail()?>
       <?=$company->getPhonenumber()?>
       <label>Salary Requested</label><?=$submission->getSalaryrequested()?>
       <label>Notes</label><?=$submission->getNotes()?>
    </body>
</html>