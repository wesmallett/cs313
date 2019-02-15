<?php
include_once "../models/applicationSubmission.php";

function getAllAppSubmissions($db){
    $sql = "SELECT t1.id,t3.companyname as company, t1.jobtitle, t1.salaryrequested, t1.submissiondate, t1.resumesubmission, t1.coverlettersubmission, t1.notes, t1.linktojobposting, t2.status as status FROM application_submissions t1 JOIN application_status t2 ON t1.applicationstatusid = t2.id JOIN company t3 ON t1.companyid = t3.id";
    $statement = $db->prepare($sql);
    $statement->execute();
    return $statement->fetchAll();
}

function getSubmissionById($db,$id){
    $sql = "SELECT t1.id as submissionId,t3.companyname as company, t1.jobtitle, t1.salaryrequested, t1.submissiondate, t1.resumesubmission, t1.coverlettersubmission, t1.notes, t1.linktojobposting, t2.status as status FROM application_submissions t1 JOIN application_status t2 ON t1.applicationstatusid = t2.id JOIN company t3 ON t1.companyid = t3.id WHERE t1.id = :id";
    $statement = $db->prepare($sql);
    $statement->bindParam(':id',$id);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_CLASS,"../models/applicationSubmission.php");
    var_dump($result);
    return $result;
}

?>