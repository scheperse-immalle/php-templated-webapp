<?php session_start(); ?>
<html>
<head>
<title><?php $title ?></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>
<body>
  <nav>
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="page1.php">Page 1</a></li>
        <li><a href="page2.php">Page 2</a></li>
        <li><a href="about.php">About</a></li>
<?php
	if(isset($_SESSION['logged_in'])) {
        	echo "<li><a href='logout.php'>Log uit</a></li>";
		echo "<style> nav { background-color: green; } </style>";
	} else {
		echo "<li><a href='login.php'>Log in</a></li>";
	}
?>
      </ul>
    </div>
  </nav>
