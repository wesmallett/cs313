<?php
require_once "../resources/dbConnect.php";
require "../data/applicationSubmissionData.php";
require "../data/companyData.php";
include_once "../models/applicationSubmission.php";
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
       echo "<h1>". $submission->getJobTitle()."</h1>";
       ?>
       <label>Job Title</label><input type='text' id='job-title' value=<?=$submission->getJobtitle()?> />
       <label>Company</label><input type='text' id='company' value=<?=$submission->getJobtitle()?> />
       <label>CompanyId</label><input type='text' id='id' value=<?=getCompanyByName($db,$submission->getCompany())->getId();?> />
       <input type='Submit' name='save' value='Save'/>
    </body>
    <?php
        if(!isset($_POST['job-title']) && !empty($_POST['save'])){
            echo "<script type='text/javascript'>invalidName();</script>";
        }else{
            $submission->setCompanyId($_POST['name']);
            $submission->setStreetaddress($_POST['street-address']);
            $submission->setCity($_POST['city']);
            $submission->setState($_POST['state']);
            $submission->setZipcode($_POST['zip']);
            $submission->setCompanywebsite($_POST['site']);
            $submission->setNotes($_POST['notes']);
            $submission->setPointofcontact($_POST['poc']);
            $submission->setPhonenumber($_POST['phone']);
            $submission->setEmail($_POST['email']);

            updateCompany($db, $company);

            header("Location: company_overview.php");
            exit();
        }        

        ?>
</html>