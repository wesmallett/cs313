<?php

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

?>