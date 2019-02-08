<?php
require_once "../resources/dbConnect.php";
$db = get_db();

function getAllStatus(){
    $sql = "SELECT status FROM application_status";
    $result = $db->query($sql);
    return $result;
}

?>