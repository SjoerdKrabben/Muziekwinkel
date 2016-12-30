<?php
include('includes/header.php');

if (isset($_SESSION['username'])) {
    // Put stored session variables into local PHP variable
    $username = $_SESSION['username'];
    $result = "Test variables: <br /> Username: " . $username . "<br />";
//    echo $result;
}
else {
    $result = "You are not logged in yet";
}
?>


