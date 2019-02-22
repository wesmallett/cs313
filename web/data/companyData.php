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
    $statement->bindParam(':id',$id);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_CLASS,"Company");
    $company = $result[0];
    return $company;
}

function getCompanyByName($db,$companyName){
    $sql = "SELECT * FROM company where companyname = :name";
    $statement = $db->prepare($sql);
    $statement->bindParam(':name',$companyName);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_CLASS,"Company");
    $company = $result[0];
    return $company;
}

function updateCompany($db, $company){
    $sql = "UPDATE company SET companyname = :companyname, streetaddress = :streetaddress, city = :city, state = :state, zipcode = :zipcode, companywebsite = :companywebsite
            notes = :notes, pointofcontact = :pointofcontact, phonenumber = :phonenumber, email = :email where id = :id";
    $statement = $db->prepare($sql);
    $statement->bindParam(':companyname',$company->getCompanyname());
    $statement->bindParam(':streetaddress',$company->getStreetaddress());
    $statement->bindParam(':city',$company->getCity());
    $statement->bindParam(':state',$company->getState());
    $statement->bindParam(':zipcode',$company->getZipcode());
    $statement->bindParam(':companywebsite',$company->getCompanywebsite());
    $statement->bindParam(':notes',$company->getNotes());
    $statement->bindParam(':pointofcontact',$company->getPointofcontact());
    $statement->bindParam(':phonenumber',$company->getPhonenumber());
    $statement->bindParam(':email',$company->getEmail());
    $statement->bindParam(':id',$company->getId());
    $statement->execute();
}

function insertCompany($db,$company){
    $sql = "INSERT INTO company (companyname,streetaddress,city,state,zipcode,companywebsite,notes,pointofcontact,phonenumber,email)
                VALUES (:name,:address,:city,:state,:zip,:site,:notes,:poc,:phone,:email)";
    $statement = $db->prepare($sql);
    $statement->bindParam(':name',$company->getCompanyname());
    $statement->bindParam(':address',$company->getStreetaddress());
    $statement->bindParam(':city',$company->getCity());
    $statement->bindParam(':state',$company->getState());
    $statement->bindParam(':zip',$company->getZipcode());
    $statement->bindParam(':site',$company->getCompanywebsite());
    $statement->bindParam(':notes',$company->getNotes());
    $statement->bindParam(':poc',$company->getPointofcontact());
    $statement->bindParam(':phone',$company->getPhonenumber());
    $statement->bindParam(':email',$company->getEmail());
    $statement->execute();
            
}

?>