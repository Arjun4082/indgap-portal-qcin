<?php

$host = 'localhost';
$username = 'tmdicai_kgap_premiummarket_user';
$password = '[*%-7Azxy^3K';
$database = 'tmdicai_krishigap_premiummarket';
$db = mysqli_connect($host, $username, $password, $database);
if ($db->connect_error) {
   echo "Not connected, error: " . $mysqli_connection->connect_error;
}

?>
