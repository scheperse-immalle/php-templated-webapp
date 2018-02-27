<?php 
$title="Logout"; 
include('header.php');

session_start();
unset($_SESSION['logged_in']); 

?>
<h2>You are now logged out!</h2>
<p>Redirecting in 3 seconds...</p>
<?php

header("refresh:3,url=index.php");
