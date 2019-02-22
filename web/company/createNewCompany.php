<?php
require_once "../resources/dbConnect.php";
require "../data/companyData.php";
include_once "../models/company.php";
$db = get_db();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Create New Company</title>
        <link rel="stylesheet" href="../stylings.css" type="text/css">
    </head>
    <body>
    <?php include_once '../navbar.php'?>
    <h1>Add Company</h1>
        <form action='createNewCompany.php' method="POST">
            <label>Name: 
                <input type='text' name='name'/>
            </label>
            <label>Street Address: 
                <input type='text' name='street-address'/>
            </label>
            <label>City: 
                <input type='text' name='city'/>
            </label>
            <label>State: 
                <input type='text' name='state'/>
            </label>
            <label>Zip: 
                <input type='text' name='zip'/>
            </label>
            <label>Company Website: 
                <input type='text' name='site'/>
            </label>
            <label>Point of Contact: 
                <input type='text' name='contact'/>
            </label>
            <label>Phone Number: 
                <input type='text' name='phone-number'/>
            </label>
            <label>Email: 
                <input type='text' name='email'/>
            </label>
            <label>Notes: 
                <input type='text' name='notes'/>
            </label>
            <input type='Submit' value='Create'/>
        </form>

        <?php
        if(empty($_POST)){

        }else{
            $company = new Company();
            $company->setName($_POST['name']);
            $company->setStreetaddress($_POST['street-address']);
            $company->setCity($_POST['city']);
            $company->setState($_POST['state']);
            $company->setZip($_POST['zip']);
            $company->setWebsite($_POST['site']);
            $company->setNotes($_POST['notes']);
            $company->setPointOfContact($_POST['contact']);
            $company->setPhoneNumber($_POST['phone-number']);
            $company->setEmail($_POST['email']);

            insertCompany($db, $company);

            header("Location: view_company.php");
            exit();
        }

        

        ?>
    </body>
</html>