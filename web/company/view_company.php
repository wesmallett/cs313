<?php
require_once "../resources/dbConnect.php";
require "../data/companyData.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Companies</title>
        <link rel="stylesheet" href="../stylings.css" type="text/css">
    </head>

    <body>
    <?php include_once '../navbar.php'?>
    <h1>Companies</h1>
    <form action="createNewCompany.php">
        <input type="submit" value="Add New"/>
    </form>
    <table>
    <tr>
        <th></th>
        <th>Name</th>
        <th>Address</th>
        <th>Point of Contact</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Website</th>
    </tr>
    <?php
    $companies = getAllCompanies($db);
    foreach($companies as $company){
        ?>
        <tr>
        <td><form action="company_overview.php" method="POST">
        <input type="hidden" name=companyId value=<?=$company['id']?> />
        <input type="submit" id="view_company_overview" name="view" value="View" />
        </form></td>
        <td><?=$company['companyname']?></td>
        <td><?=$company['streedaddress']." ".$company['city'].", ".$company['state']." ".$company['zipcode']?></td>
        <td><?=$company['pointofcontact']?></td>
        <td><?=$company['phonenumber']?></td>
        <td><?=$company['email']?></td>
        <td><a href='http://<?=$company['companywebsite']?>' target='_blank'><?=$company['companywebsite']?></a></td>
        </tr>
    <?php
    }
    ?>
    </table>
    <?php 

    ?>
    </body>
</html>