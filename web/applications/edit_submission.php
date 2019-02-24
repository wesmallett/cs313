<?php
require_once "../resources/dbConnect.php";
require "../data/applicationSubmissionData.php";
require "../data/companyData.php";
require "../data/applicationStatusData.php";
include_once "../models/applicationSubmission.php";
include_once "../models/company.php";
include_once "../models/applicationStatus.php";
session_start();
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
       $submission = getSubmissionById($db,intval($_SESSION['submissionId']));
       echo "<h1>". $submission->getJobtitle()."</h1>";
       ?>

       <form action="edit_submission.php" method="POST">
        <label>Job Title</label><input type='text' name='job-title' value="<?=$submission->getJobtitle()?>" />
        <label>Company</label><input type='text' name='company' value="<?=$submission->getCompany()?>" />
        <label>Salary Requested</label><input type='text' name='salary' value="<?=$submission->getSalaryrequested()?>" />
        <label>Notes</label><input type='text' name='notes' value="<?=$submission->getNotes()?>" />
        <label>Submitted Resume</label><input type='text' name='resume' value="<?=$submission->getResumesubmission()?>" />
        <label>Submitted Cover Letter</label><input type='text' name='cover-letter' value="<?=$submission->getCoverlettersubmission()?>" />
        <label>Status</label><input type='text' name='status' value="<?=$submission->getApplicationstatus()?>" />
        <input type='Submit' name='save' value='Save'/>
       </form>
       <?=$blah = getCompanyByName($db,$submission->getCompany())->getId();
       echo $blah;
       ?>
    </body>
    <?php
        if(!isset($_POST['job-title']) && !empty($_POST['save'])){
            echo "<script type='text/javascript'>invalidName();</script>";
        }else{
            // error_log("lets try this");
            // $company = $_POST['company'];
            // error_log($company);
            // $companyId = getCompanyByName($db,$company)->getId();
            $submission->setCompanyId(getCompanyByName($db,$_POST['company'])->getId());
            $submission->setJobtitle($_POST['job-title']);
            $submission->setSalaryrequested($_POST['salary']);
            $submission->setNotes($_POST['notes']);
            $submission->setResumesubmission($_POST['resume']);
            $submission->setCoverlettersubmission($_POST['cover-letter']);
            $status = $_POST['status'];
            $statusId = getStatusByName($db,$status)->getId();
            $submission->setApplicationstatusid($statusId);

            updateSubmission($db, $submission);

            header("Location: submission_overview.php");
            exit();
        }        

        ?>
</html>