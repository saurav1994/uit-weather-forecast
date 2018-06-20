<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
<body>
	<h2>Hello,<?php echo $_SESSION['username'];?></h2>
	<a href="entrance.html">CONTINUE</a>
	<a href="logout.php">LOGOUT</a>
</body>