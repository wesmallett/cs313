<?php
include_once "../models/applicationSubmission.php";

function getAllAppSubmissions($db){
    $sql = "SELECT * FROM application_submissions";
    $statement = $db->prepare($sql);
    $statement->execute();
    return $statement->fetchAll();
}

function getAppSubmission($db,$id){
    $sql = "SELECT * FROM application_submissions where id = :id";
    $statement = $db->prepare($sql);
    $statement->bind_param(':id',$id);
    $statement->execute();
    return $statement->fetchAll();
}

?>