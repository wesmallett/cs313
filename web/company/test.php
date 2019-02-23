<?php
require_once "../resources/dbConnect.php";
require "../data/applicationSubmissionData.php";
require_once "../data/companyData.php";
require_once "../models/company.php";


        if(empty($_GET)){

        }else{
            if($_GET['name']!=null){
                $company = new Company();
                $company->setCompanyname($_GET['name']);
                $company->setStreetaddress($_GET['street-address']);
                $company->setCity($_GET['city']);
                $company->setState($_GET['state']);
                $company->setZipcode($_GET['zip']);
                $company->setCompanywebsite($_GET['site']);
                $company->setNotes($_GET['notes']);
                // $company->setPointofcontact($_POST['contact']);
                // $company->setPhonenumber($_POST['phone-number']);
                // $company->setEmail($_POST['email']);

                updateCompany($db, $company);
    
                header("Location: view_company.php");
                exit();
            }else{
                echo "A Company Name is Required";
            }
        }        

        ?>