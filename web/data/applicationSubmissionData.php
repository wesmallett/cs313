<?php
include_once "../models/applicationSubmission.php";

function getAllAppSubmissions($db){
    $sql = "SELECT t1.id,t3.companyname as company, t1.jobtitle, t1.salaryrequested, t1.submissiondate, t1.resumesubmission, t1.coverlettersubmission, t1.notes, t1.linktojobposting, t2.status as applicationstatus FROM application_submissions t1 JOIN application_status t2 ON t1.applicationstatusid = t2.id JOIN company t3 ON t1.companyid = t3.id";
    $statement = $db->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_CLASS,"ApplicationSubmission");
    return $result;
}

function getSubmissionById($db,$id){
    $sql = "SELECT t1.id,t3.companyname as company, t1.jobtitle, t1.salaryrequested, t1.submissiondate, t1.resumesubmission, t1.coverlettersubmission, t1.notes, t1.linktojobposting, t2.status as applicationstatus FROM application_submissions t1 JOIN application_status t2 ON t1.applicationstatusid = t2.id JOIN company t3 ON t1.companyid = t3.id WHERE t1.id = :id";
    $statement = $db->prepare($sql);
    $statement->bindParam(':id',$id);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_CLASS,"ApplicationSubmission");
    $submission = $result[0];
    return $submission;
}

function getSubmissionsByCompany($db, $companyId){
    $sql = "SELECT t1.id,t3.companyname as company, t1.jobtitle, t1.salaryrequested, t1.submissiondate, t1.resumesubmission, t1.coverlettersubmission, t1.notes, t1.linktojobposting, t2.status as applicationstatus FROM application_submissions t1 JOIN application_status t2 ON t1.applicationstatusid = t2.id JOIN company t3 ON t1.companyid = t3.id WHERE t1.companyid = :companyId";
    $statement = $db->prepare($sql);
    $statement->bindParam(':companyId',$companyId);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_CLASS,"ApplicationSubmission");
    return $result;
}

function updateSubmission($db, $submission){
    $sql = "UPDATE application_submissions SET companyid = :companyid, jobtitle = :jobtitle, salaryrequested = :salaryrequested, submissiondate = :submissiondate,
    resumesubmission = :resume, coverlettersubmission = :coverletter, notes = :notes, linktojobposting = :linktojob, applicationstatusid = :statusid where id = :submissionId";
    $statement = $db->prepare($sql);
    $statement->bindParam(':companyid',$submission->getCompanyid());
    $statement->bindParam(':jobtitle',$submission->getJobtitle());
    $statement->bindParam(':salaryrequested',$submission->getSalaryrequested());
    $statement->bindParam(':submissiondate',$submission->getSubmissiondate());
    $statement->bindParam(':resume',$submission->getResumesubmission());
    $statement->bindParam(':coverletter',$submission->getCoverlettersubmission());
    $statement->bindParam(':notes',$submission->getNotes());
    $statement->bindParam(':linktojob',$submission->getLinktojobposting());
    $statement->bindParam(':statusid',$submission->getApplicationstatusid());
    $statement->bindParam(':submissionId',$submission->getId());
    $statement->execute();
}

?>