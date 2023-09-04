<?php
session_start();
include "dbconnect.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>welcome to profile page</title>
</head>
<body>
	<!-- <h3>profile page</h3> -->
	
			<!-- session call -->
	<h2> Name = <?php echo $_SESSION['vijay_name']; ?></h2>
	<h2> Email = <?php echo $_SESSION['myemail']; ?></h2>
	<h2> Mobile No = <?php echo $_SESSION['mymobile_no']; ?></h2>
</body>
</html>