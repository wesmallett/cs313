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
                VALUES (:name,:address,:city,:state,:zip,:site,:notes,:poc,:phone,:email)";
    $statement = $db->prepare($sql);
    $statement->bindParam(':name',$company->getName());
    $statement->bindParam(':address',$company->getStreetaddress());
    $statement->bindParam(':city',$company->getCity());
    $statement->bindParam(':state',$company->getState());
    $statement->bindParam(':zip',$company->getZip());
    $statement->bindParam(':site',$company->getWebsite());
    $statement->bindParam(':notes',$company->getNotes());
    $statement->bindParam(':poc',$company->getPointOfContact());
    $statement->bindParam(':phone',$company->getPhoneNumber());
    $statement->bindParam(':email',$company->getEmail());
    if($statement->execute()){
        error_log("SUCCESS!!!");
    }else{
        error_log("ERROR: ".$statement->error);
    }
            
}

?>