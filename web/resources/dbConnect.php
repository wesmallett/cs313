<?php
function get_db(){
    $db = parse_url(getenv("DATABASE_URL"));
    
    $dbHost = $db["host"];
    $dbPort = $db["port"];
    $dbUser = $db["user"];
    $dbPassword = $db["pass"];
    $dbName = ltrim($db["path"],'/');
    $conn = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    return $conn;
}
?>