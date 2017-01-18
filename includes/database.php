<?php

$username = "root";
$password = "JPSm5iau4SFAIr8C";
$serverName = "localhost";
$database = "Muziekwinkel";

$conn = mysqli_connect($serverName, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

?>