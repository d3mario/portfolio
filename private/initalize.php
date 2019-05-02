<?php
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("SHARED_PATH", PRIVATE_PATH . '/shared');

include_once ('db_credentials.php');
require_once ('functions.php');
require_once ('client.php');
$host = DB_SERVER;
$port = DB_PORT;
$db = DB_NAME;
$username = DB_USER;
$password = DB_PASS;

try{
//  Create a database connection
    $dsn = "pgsql:host=$host;port=$port;dbname=$db;user=$username;password=$password";
    $connection = new PDO($dsn);
    if($connection) {
       //echo "Connected to the $db database successfully";
       return;
    }
}catch (PDOException $e){
    echo $e->getMessage();
}

?>