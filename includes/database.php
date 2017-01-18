<?php

$username = "root";
$password = "JPSm5iau4SFAIr8C";
$serverName = "localhost";
$database = "Muziekwinkel";
$connectionInfo = array("Database" => "Muziekwinkel", "UID" => "root", "PWD"=>"JPSm5iau4SFAIr8C");


//$conn = mysqli_connect($serverName, $connectionInfo);
//
//if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

?>