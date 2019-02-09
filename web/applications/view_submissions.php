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
    <h1>Application Submissions</h1>
    <form action="addSubmission.php">
        <input type="submit" value="Add New Application"/>
    </form>
    <table>
    <tr>
        <th>Status</th>
        <th>Company</th>
        <th>Position</th>
        <th>Submission Date</th>
        <th>Requested Salary</th>
        <th>Last Contact Date</th>
        <th>Link to Job</th>
    </tr>
    <?php
    $submissions = getAllAppSubmissions($db);
    foreach($submissions as $submission){
        ?>
        <tr>
        <td><?=$submission['applicationstatusid']?></td>
        <td><?=$submission['companyid']?></td>
        <td><?=$submission['jobtitle']?></td>
        <td><?=$submission['submissiondate']?></td>
        <td><?=$submission['salaryrequested']?></td>
        <td><?=$submission['lastcontactdate']?></td>
        <td><?=$submission['linktojobposting']?></td>
        </tr>
    <?php
    }
    ?>
    </table>
    <?php 

    ?>
    </body>
</html>