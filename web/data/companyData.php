<?php

function getAllStatus($db){
    $sql = "SELECT status FROM application_status";
    $statement = $db->prepare($sql);
    $statement->execute();
    return $statement->fetchAll();
}

?>