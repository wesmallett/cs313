<?php
class Company{
    var $id;
    var $companyname;
    var $streetaddress;
    var $city;
    var $state;
    var $zipcode;
    var $companywebsite;
    var $notes;
    var $pointofcontact;
    var $phonenumber;
    var $email;
    

    /**
     * Get the value of companyname
     */ 
    public function getCompanyname()
    {
        return $this->companyname;
    }

    /**
     * Set the value of companyname
     *
     * @return  self
     */ 
    public function setCompanyname($companyname)
    {
        $this->companyname = $companyname;

        return $this;
    }

    /**
     * Get the value of streetaddress
     */ 
    public function getStreetaddress()
    {
        return $this->streetaddress;
    }

    /**
     * Set the value of streetaddress
     *
     * @return  self
     */ 
    public function setStreetaddress($streetaddress)
    {
        $this->streetaddress = $streetaddress;

        return $this;
    }

    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of state
     */ 
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the value of state
     *
     * @return  self
     */ 
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get the value of zipcode
     */ 
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set the value of zipcode
     *
     * @return  self
     */ 
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

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
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of phonenumber
     */ 
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * Set the value of phonenumber
     *
     * @return  self
     */ 
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    /**
     * Get the value of pointofcontact
     */ 
    public function getPointofcontact()
    {
        return $this->pointofcontact;
    }

    /**
     * Set the value of pointofcontact
     *
     * @return  self
     */ 
    public function setPointofcontact($pointofcontact)
    {
        $this->pointofcontact = $pointofcontact;

        return $this;
    }

    /**
     * Get the value of companywebsite
     */ 
    public function getCompanywebsite()
    {
        return $this->companywebsite;
    }

    /**
     * Set the value of companywebsite
     *
     * @return  self
     */ 
    public function setCompanywebsite($companywebsite)
    {
        $this->companywebsite = $companywebsite;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
}



?>