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
            <input type="hidden" name="companyId" value=<?= $_POST['companyId']?> />
            <input type="submit" name="edit" value='Edit Company'/>
       </form>
       <?=$company->getCompanyname()?>
       <?=$company->getStreetaddress()?>
       <?=$company->getCity()?>
       <?=$company->getState()?>
       <?=$company->getZipcode()?>
       <?=$company->getPointofcontact()?>
       <?=$company->getEmail()?>
       <?=$company->getPhonenumber()?>
    </body>
</html>