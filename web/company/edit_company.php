<?php
require_once "../resources/dbConnect.php";
require "../data/applicationSubmissionData.php";
require_once "../data/companyData.php";
require_once "../models/company.php";
session_start();
$db = get_db();
        if(empty($_POST)){

        }else{
            if($_POST['name']!=null){
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
                $company->setId(intval($_SESSION['companyId']));

                updateCompany($db, $company);

                header("Location: company_overview.php");
                exit();

            }else{
                echo "A Company Name is Required";
            }
        }        

        ?>