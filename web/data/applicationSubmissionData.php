<?php
include_once "../models/applicationSubmission.php";

class ApplicationSubmission{
    var $id;
    var $companyId;
    var $jobTitle;
    var $salaryRequested;
    var $submissionDate;
    var $lastContactId;
    var $resumeSubmission;
    var $coverLetterSubmission;
    var $notes;
    var $linkToJobPosting;
    var $applicationStatusId;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of companyId
     */ 
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * Set the value of companyId
     *
     * @return  self
     */ 
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * Get the value of jobTitle
     */ 
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Set the value of jobTitle
     *
     * @return  self
     */ 
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;

        return $this;
    }

    /**
     * Get the value of submissionDate
     */ 
    public function getSubmissionDate()
    {
        return $this->submissionDate;
    }

    /**
     * Set the value of submissionDate
     *
     * @return  self
     */ 
    public function setSubmissionDate($submissionDate)
    {
        $this->submissionDate = $submissionDate;

        return $this;
    }

    /**
     * Get the value of salaryRequested
     */ 
    public function getSalaryRequested()
    {
        return $this->salaryRequested;
    }

    /**
     * Set the value of salaryRequested
     *
     * @return  self
     */ 
    public function setSalaryRequested($salaryRequested)
    {
        $this->salaryRequested = $salaryRequested;

        return $this;
    }

    /**
     * Get the value of lastContactId
     */ 
    public function getLastContactId()
    {
        return $this->lastContactId;
    }

    /**
     * Set the value of lastContactId
     *
     * @return  self
     */ 
    public function setLastContactId($lastContactId)
    {
        $this->lastContactId = $lastContactId;

        return $this;
    }

    /**
     * Get the value of resumeSubmission
     */ 
    public function getResumeSubmission()
    {
        return $this->resumeSubmission;
    }

    /**
     * Set the value of resumeSubmission
     *
     * @return  self
     */ 
    public function setResumeSubmission($resumeSubmission)
    {
        $this->resumeSubmission = $resumeSubmission;

        return $this;
    }

    /**
     * Get the value of coverLetterSubmission
     */ 
    public function getCoverLetterSubmission()
    {
        return $this->coverLetterSubmission;
    }

    /**
     * Set the value of coverLetterSubmission
     *
     * @return  self
     */ 
    public function setCoverLetterSubmission($coverLetterSubmission)
    {
        $this->coverLetterSubmission = $coverLetterSubmission;

        return $this;
    }

    /**
     * Get the value of notes
     */ 
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set the value of notes
     *
     * @return  self
     */ 
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get the value of linkToJobPosting
     */ 
    public function getLinkToJobPosting()
    {
        return $this->linkToJobPosting;
    }

    /**
     * Set the value of linkToJobPosting
     *
     * @return  self
     */ 
    public function setLinkToJobPosting($linkToJobPosting)
    {
        $this->linkToJobPosting = $linkToJobPosting;

        return $this;
    }

    /**
     * Get the value of applicationStatusId
     */ 
    public function getApplicationStatusId()
    {
        return $this->applicationStatusId;
    }

    /**
     * Set the value of applicationStatusId
     *
     * @return  self
     */ 
    public function setApplicationStatusId($applicationStatusId)
    {
        $this->applicationStatusId = $applicationStatusId;

        return $this;
    }
}

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
    $result = $statement->fetchAll(PDO::FETCH_CLASS,"ApplicationSubmission");
    //var_dump($result);
    return $result;
}

?>