<?php
require_once "../resources/dbConnect.php";
require "../data/applicationSubmissionData.php";
require_once "../data/companyData.php";
require_once "../models/company.php";

$db = get_db();
        if(empty($_POST)){

        }else{
            error_log("attempting to save");
            if($_POST['name']!=null){
                error_log("saving");
                $company = new Company();
                $company->setCompanyname($_POST['name']);
                $company->setStreetaddress($_POST['street-address']);
                $company->setCity($_POST['city']);
                $company->setState($_POST['state']);
                $company->setZipcode($_POST['zip']);
                $company->setCompanywebsite($_POST['site']);
                $company->setNotes($_POST['notes']);
                $company->setPointofcontact($_POST['poc']);
                $company->setPhonenumber($_POST['phone']);
                $company->setEmail($_POST['email']);
                $company->setId(intval($_POST['id']));

                updateCompany($db, $company);

                header("Location: update_company.php");
                exit();
            }else{
                echo "A Company Name is Required";
            }
        }        

        ?>