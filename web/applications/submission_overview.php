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
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script>
            $("#edit-submission").click(function(){
                var jsonData = <?= print json_encode($submission); ?>;
                alert(jsonData);
                $.ajax({ url: 'edit_submission.php',
                    data: {submission: jsonData},
                    type: 'post',
                    success: function(output) {
                        alert(output);
                    }
                });
            });
        </script>
    </head>

    <body>
       <?php 
       $submission = getSubmissionById($db,intval($_GET['submissionId']));
       ?>
       <button id='edit-submission'>Edit Submission</button>
        <form action="edit_submission.php" method="POST">
            <input type="submit" name="edit" value='Edit Submission'/>
       </form>
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