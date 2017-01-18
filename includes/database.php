<?php

$userName = "root";
$password = "JPSm5iau4SFAIr8C";
$serverName = "localhost";
$database = "Muziekwinkel";
$connectionInfo = array("Database" => "Muziekwinkel", "UID" => "root", "PWD"=>"JPSm5iau4SFAIr8C");


$conn = mysqli_connect($serverName, $connectionInfo);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . print_r( sqlsrv_errors(), true));
}
echo "Connected successfully";

?>