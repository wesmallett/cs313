<?php
require_once "../resources/dbConnect.php";
require "../data/applicationSubmissionData.php";
require "../data/companyData.php";
include_once "../models/company.php";

$db = get_db();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Application Submissions</title>
        <link rel="stylesheet" href="../stylings.css" type="text/css">
    </head>

    <body>
       <?php 
       $company = getCompanyById($db,intval($_POST['companyId']));
       ?>
       <form action="update_company.php" method="POST">
            <label>Company</label><input type='text' name='company' value=<?=$company->getCompanyname()?> />
            <label>Address</label><input type='text' name='street-address' value=<?=$company->getStreetaddress()?> />
            <label>City</label><input type='text' name='city' value=<?=$company->getCity()?> />
            <label>State</label><input type='text' name='state' value=<?=$company->getState()?> />
            <label>Zip</label><input type='text' name='zipcode' value=<?=$company->getZipcode()?> />
            <label>Notes</label><input type='text' name='notes' value=<?=$company->getNotes()?> />
            <input type='submit' name='save' value='Save'/>
        </form>
    </body>

    <?php
        if(empty($_POST)){

        }else{
            $company = new Company();
            $company->setCompanyname($_POST['name']);
            $company->setStreetaddress($_POST['street-address']);
            $company->setCity($_POST['city']);
            $company->setState($_POST['state']);
            $company->setZipcode($_POST['zip']);
            $company->setCompanywebsite($_POST['site']);
            $company->setNotes($_POST['notes']);
            // $company->setPointofcontact($_POST['contact']);
            // $company->setPhonenumber($_POST['phone-number']);
            // $company->setEmail($_POST['email']);

            updateCompany($db, $company);

            header("Location: view_company.php");
            exit();
        }        

        ?>
</html>