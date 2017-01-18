<?php

$userName = "root";
$password = "JPSm5iau4SFAIr8C";
$serverName = "localhost\Muziekwinkel";



$conn = mysqli_connect($serverName, $userName, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>