<?php
require_once "../resources/dbConnect.php";
require "../data/applicationSubmissionData.php";
require_once "../data/companyData.php";
require_once "../models/company.php";

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
       <form action="update_company.php" method="GET">
            <label>Company</label><input type='text' name='name' value="<?= $company->getCompanyname();?>"/>
            <label>Address</label><input type='text' name='street-address' value="<?=$company->getStreetaddress();?>" />
            <label>City</label><input type='text' name='city' value="<?=$company->getCity();?>" />
            <label>State</label><input type='text' name='state' value="<?=$company->getState();?>" />
            <label>Zip</label><input type='text' name='zipcode' value="<?=$company->getZipcode();?>" />
            <label>Notes</label><input type='text' name='notes' value="<?=$company->getNotes();?>" />
            <input type='Submit' name='save' value='Save'/>
        </form>
    </body>

    <?php
        if(empty($_GET)){

        }else{
            if($_GET['name']!=null){
                $updatedCompany = new Company();
                $updatedCompany->setId($_POST['companyId']);
                $updatedCompany->setCompanyname($_GET['name']);
                $updatedCompany->setStreetaddress($_GET['street-address']);
                $updatedCompany->setCity($_GET['city']);
                $updatedCompany->setState($_GET['state']);
                $updatedCompany->setZipcode($_GET['zip']);
                $updatedCompany->setCompanywebsite($_GET['site']);
                $updatedCompany->setNotes($_GET['notes']);
                // $updatedCompany->setPointofcontact($_POST['contact']);
                // $updatedCompany->setPhonenumber($_POST['phone-number']);
                // $updatedCompany->setEmail($_POST['email']);

                updateCompany($db, $updatedCompany);
    
                header("Location: view_company.php");
                exit();
            }else{
                echo "A Company Name is Required";
            }
        }        

        ?>
</html>