<?php
require_once "../resources/dbConnect.php";
require "../data/applicationSubmissionData.php";
require_once "../data/companyData.php";
require_once "../models/company.php";
session_start();
$db = get_db();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Application Submissions</title>
        <link rel="stylesheet" href="../stylings.css" type="text/css">
        <script type='text/javascript'>
            function invalidName(){
                alert("A Name is Required to Save a Company.");
            }
        </script>
    </head>

    <body>
       <?php 
       $company = getCompanyById($db,intval($_SESSION['companyId']));
       echo "<h1>". $company->getCompanyname()."</h1>";
       ?>
       <form action="update_company.php" method="POST">
            <label>Company</label><input type='text' name='name' value="<?= $company->getCompanyname();?>"/>
            <label>Address</label><input type='text' name='street-address' value="<?=$company->getStreetaddress();?>" />
            <label>City</label><input type='text' name='city' value="<?=$company->getCity();?>" />
            <label>State</label><input type='text' name='state' value="<?=$company->getState();?>" />
            <label>Zip</label><input type='text' name='zipcode' value="<?=$company->getZipcode();?>" />
            <label>Notes</label><input type='text' name='notes' value="<?=$company->getNotes();?>" />
            <label>Point of Contact</label><input type='text' name='poc' value="<?=$company->getPointofcontact();?>" />
            <label>Phone Number</label><input type='text' name='phone' value="<?=$company->getPhonenumber();?>" />
            <label>Email</label><input type='text' name='email' value="<?=$company->getEmail();?>" />
            <input type='Submit' name='save' value='Save'/>
        </form>
    </body>

    <script type='text/javascript'>
            function invalidName(){
                alert("A Name is Required to Save a Company.");
            }
        </script>
    <?php
        if(!isset($_POST['name']) && !empty($_POST['save'])){
            echo "<script type='text/javascript'>invalidName();</script>";
        }else{
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

            updateCompany($db, $company);

            header("Location: company_overview.php");
            exit();
        }        

        ?>
</html>