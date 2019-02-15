<?php>
require_once "../resources/dbConnect.php";
require "../data/applicationSubmissionData.php";
$db = get_db();

if(!isempty($_POST['id'])){
    $submission = getAppSubmission($db,$_POST['id']);
    echo $submission;
}
?>