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
    <h1>Companies</h1>
    <form action="createNewCompany.php">
        <input type="submit" value="Add New"/>
    </form>
    <table>
    <tr>
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
        <td><?=$company['companyname']?></td>
        <td><?=$company['streedaddress']." ".$company['city'].", ".$company['state']." ".$company['zipcode']?></td>
        <td><?=$company['pointofcontact']?></td>
        <td><?=$company['phonenumber']?></td>
        <td><?=$company['email']?></td>
        <td><?=$company['companywebsite']?></td>
        </tr>
    <?php
    }
    ?>
    <tr>
        <td>Company 1</td>
        <td>123 Main st</td>
        <td>BillBo Baggins</td>
        <td>555-555-5555</td>
        <td>bill@baggins.com</td>
        <td>www.google.com</td>
    </tr>
    </table>
    <?php 

    ?>
    </body>
</html>