<?php
require_once "../resources/dbConnect.php";
require "../data/applicationSubmissionData.php";
$db = get_db();

if(!isempty($_POST['id'])){
    $submission = getAppSubmission($db,$_POST['id']);
    echo $submission;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Application Submissions</title>
        <link rel="stylesheet" href="../stylings.css" type="text/css">
    </head>

    <body>
       <?php echo $submission;?>
    </body>
</html>