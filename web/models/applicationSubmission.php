<?php
class ApplicationSubmission{
    var $id;
    var $company;
    var $jobtitle;
    var $salaryrequested;
    var $submissiondate;
    var $lastContactId;
    var $resumesubmission;
    var $coverlettersubmission;
    var $notes;
    var $linktojobposting;
    var $applicationstatus;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of company
     */ 
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set the value of company
     *
     * @return  self
     */ 
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get the value of jobtitle
     */ 
    public function getJobtitle()
    {
        return $this->jobtitle;
    }

    /**
     * Set the value of jobtitle
     *
     * @return  self
     */ 
    public function setJobtitle($jobtitle)
    {
        $this->jobtitle = $jobtitle;

        return $this;
    }

    /**
     * Get the value of salaryrequested
     */ 
    public function getSalaryrequested()
    {
        return $this->salaryrequested;
    }

    /**
     * Set the value of salaryrequested
     *
     * @return  self
     */ 
    public function setSalaryrequested($salaryrequested)
    {
        $this->salaryrequested = $salaryrequested;

        return $this;
    }

    /**
     * Get the value of submissionDate
     */ 
    public function getSubmissiondate()
    {
        return $this->submissionDate;
    }

    /**
     * Set the value of submissionDate
     *
     * @return  self
     */ 
    public function setSubmissiondate($submissionDate)
    {
        $this->submissionDate = $submissionDate;

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
     * Get the value of resumesubmission
     */ 
    public function getResumesubmission()
    {
        return $this->resumesubmission;
    }

    /**
     * Set the value of resumesubmission
     *
     * @return  self
     */ 
    public function setResumesubmission($resumesubmission)
    {
        $this->resumesubmission = $resumesubmission;

        return $this;
    }

    /**
     * Get the value of coverlettersubmission
     */ 
    public function getCoverlettersubmission()
    {
        return $this->coverlettersubmission;
    }

    /**
     * Set the value of coverlettersubmission
     *
     * @return  self
     */ 
    public function setCoverlettersubmission($coverlettersubmission)
    {
        $this->coverlettersubmission = $coverlettersubmission;

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
     * Get the value of linktojobposting
     */ 
    public function getLinktojobposting()
    {
        return $this->linktojobposting;
    }

    /**
     * Set the value of linktojobposting
     *
     * @return  self
     */ 
    public function setLinktojobposting($linktojobposting)
    {
        $this->linktojobposting = $linktojobposting;

        return $this;
    }

    /**
     * Get the value of applicationstatus
     */ 
    public function getApplicationstatus()
    {
        return $this->applicationstatus;
    }

    /**
     * Set the value of applicationstatus
     *
     * @return  self
     */ 
    public function setApplicationstatus($applicationstatus)
    {
        $this->applicationstatus = $applicationstatus;

        return $this;
    }
}

?>