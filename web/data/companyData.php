<?php
include_once "../models/company.php";

function getAllCompanies($db){
    $sql = "SELECT * FROM company";
    $statement = $db->prepare($sql);
    $statement->execute();
    return $statement->fetchAll();
}

function getCompanyById($db,$id){
    $sql = "SELECT * FROM company where id = :id";
    $statement = $db->prepare($sql);
    $statement->bind_param(':id',$id);
    $statement->execute();
    return $statement->fetchAll();
}

function getCompanyByName($db,$companyName){
    $sql = "SELECT * FROM company where companyname = :name";
    $statement = $db->prepare($sql);
    $statement->bind_param(':name',$companyName);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_CLASS,"Company");
    $company = $result[0];
    return $company;
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
    $statement->execute();
            
}

?>