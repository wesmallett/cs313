<?php
include_once "../models/applicationStatus.php";

function getAllStatuses($db){
    $sql = "SELECT * from application_status";
    $statement = $db->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_CLASS,"ApplicationStatus");
    return $result;
}

function getStatusById($db,$statusId){
    $sql = "SELECT * from application_status where id = :id";
    $statement = $db->prepare($sql);
    $statement->bindParam(':id',$statusId);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_CLASS,"ApplicationStatus");
    $status = $result[0];
    return $status;
}

function getStatusByName($db,$status){
    $sql = "SELECT * from application_status where status = :status";
    $statement = $db->prepare($sql);
    $statement->bindParam(':status',$status);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_CLASS,"ApplicationStatus");
    $status = $result[0];
    return $status;
}

?>