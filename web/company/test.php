<?php
require_once "../resources/dbConnect.php";
require "../data/applicationSubmissionData.php";
require_once "../data/companyData.php";
require_once "../models/company.php";

$db = get_db();
        if(empty($_GET)){

        }else{
            error_log("attempting to save");
            if($_GET['name']!=null){
                error_log("saving");
                $company = new Company();
                $company->setId(intval($_GET['id']));
                $company->setCompanyname($_GET['name']);
                $company->setStreetaddress($_GET['street-address']);
                $company->setCity($_GET['city']);
                $company->setState($_GET['state']);
                $company->setZipcode($_GET['zip']);
                $company->setCompanywebsite($_GET['site']);
                $company->setNotes($_GET['notes']);
                $company->setPointofcontact($_POST['poc']);
                $company->setPhonenumber($_POST['phone']);
                $company->setEmail($_POST['email']);

                updateCompany($db, $company);
                error_log("success?");
                header("Location: view_company.php");
                exit();
            }else{
                echo "A Company Name is Required";
            }
        }        

        ?>