<?php
session_start();
session_destroy();
if (isset($_SESSION['username'])) {
    $msg = "You are logged out";
}
else {
    $msg = "LOG-OUT ERROR, could not log out!";
}
$url = "https://localhost/Muziekwinkel/index.php";
header("Refresh: 5; URL = ".$url);

?>

<html>
<body>
<?php echo $msg;
?>

<div style="timedate"> <?php echo(date('D, d M Y H:i:s', time()) .' CET');?></p></div>
<br />


<p>
    Redirecting to homepage in: 5 seconds<?php
    ?><br />
    <a href="/GIG-store/index.php">Direct link to page</a></p>
</body>
</html>
