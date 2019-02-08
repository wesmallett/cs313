<?php
require_once "../resources/dbConnect.php";
$db = get_db();

function getAllStatus(){
    $sql = "SELECT status FROM application_status";
    $result = $db->query($sql)->fetchAll();
    return $result;
}

function getAllStatus2(){
    $statement = $db->prepare("SELECT * FROM application_status");
    return $statement->execute();
}

?>