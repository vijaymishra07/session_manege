<?php
include 'dbconnect.php';
if (isset($_POST['submit_insert'])) {
	extract($_POST);
	$con = "INSERT INTO myw SET name='$y_name', mobileNo='$y_mobileNo', gender='$y_radio', email='$y_email', password='$y_password'";
	$query= mysqli_query($convij, $con);
	if ($query){
       echo "<!DOCTYPE html>
<html>
<head>
    <title></title>
   <meta http-equiv='refresh' content='3; url = login.php'>
</head>
<body>
<h2>success fully register</h2>
<p>Plese waite ...<p>
</body>
</html>";
   }else{
    echo "not defined";
   }
}

?>