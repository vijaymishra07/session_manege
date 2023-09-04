<?php
session_start();
include "dbconnect.php";

if (isset($_POST['submitInsert'])) {
	extract($_POST);
	 $str="SELECT * FROM myw WHERE email='$email' AND password='$password'";
		$query=mysqli_query($convij, $str);
		if (mysqli_num_rows($query)==1) {
			$data = mysqli_fetch_array($query);
			$name = $data['name'];
			$Email = $data['email'];
			$MobileNo = $data['mobileNo'];
			//session start
			$_SESSION['vijay_name'] = $name;
			$_SESSION['myemail'] = $Email;
			$_SESSION['mymobile_no'] = $MobileNo;
			header("location: profile.php");
		}else{
			echo "sorry";
		}
	
}

// if(isset($_GET['logout'])){
// header('location: login.php?success=ok');
//}

?>