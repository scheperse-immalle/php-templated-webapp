<?php 
$title="Login"; 
include('header.php');
?>
<div>
<p>Login</p>
</div>
<form action="check_pwd.php" method="POST">
	<input name="myentrycode" type="text">
	<input type="submit">
</form>
<?php include('footer.php'); ?>
