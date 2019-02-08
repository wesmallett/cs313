<?php
include_once "../models/company.php";

function getAllCompanies($db){
    $sql = "SELECT * FROM company";
    $statement = $db->prepare($sql);
    $statement->execute();
    return $statement->fetchAll();
}

function getCompany($db,$id){
    $sql = "SELECT * FROM company where id = ?";
    $statement = $db->prepare($sql);
    $statement->bind_param('i',$id);
    $statement->execute();
    return $statement->fetchAll();
}

function insertCompany($db,$company){
    $sql = "INSERT INTO company (companyname,streedaddress,city,state,zipcode,companywebsite,notes,pointofcontact,phonenumber,email)
                VALUES (?,?,?,?,?,?,?,?,?,?)";
    $statement = $db->prepare($sql);
    $statement->bind_param('s,s,s,s,s,s,s,s,s,s',$company->getName(), $company->getStreetaddress(), $company->getCity(), $company->getState(), $company->getZip(),
        $company->getWebsite(), $company->getNotes(), $company->getPointOfContact(), $company->getPhoneNumber(), $company->getEmail());
    if($statement->execute()){

    }else{
        print_r($statement->error);
    }
            
}

?>