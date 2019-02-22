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
       var_dump($company->getCompanyname());
       ?>
       <form action="update_company.php" method="GET">
            <label>Company</label><input type='text' name='name' value="<?php $company->getCompanyname()?>"/>
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
                var_dump($_GET['name']);
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
    
                var_dump($company);
                updateCompany($db, $company);
    
                header("Location: view_company.php");
                exit();
            }else{
                echo "A Company Name is Required";
            }
        }        

        ?>
</html>