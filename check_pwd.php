<?php 

$title="Check password";
include('header.php');

session_start();

if($_POST['myentrycode'] == "let me in") {
	$_SESSION['logged_in'] = True;
	echo "<h2>Logged in!</h2>";
	echo "<p>Redirecting in 3 seconds...</p>";
	header("refresh:3,url=index.php");
} else {
	echo "<h2>Wrong password!</h2>";
}

?>
