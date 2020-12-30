<?php
 	$showError="false";
if ($_SERVER["REQUEST_METHOD"]=="POST") {
include 'dbconnect.php';
$u_email=$_POST['u_email'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];


 $existSql="select * from 'user' where u_email ='$u_email'";
 $result =mysqli_query($conn,$existSql);
 $numRows =mysqli_num_rows($result);

	 if ($numRows>0) {
	 	$showError="Email allredy exist";

	 }
	 
else{
	if ($pass ==$cpass) {
		
		$hash=password_hash($pass, PASSWORD_DEFAULT);
		$sql="INSERT INTO `user` (`u_email`, `u_pass`, `timestamp`) VALUES ('$u_email', '$pass', current_timestamp())";
		 $result =mysqli_query($conn,$sql);
		 echo $result;
		 if ($result) {

		 $showAlert=true;

	 header("Location:/stackoverflow/index.php?signupsucess=true");
	 exit();
	 


		 }

	}
	else{
	 	$showError="password donot matc";



	}

}
 header("Location:/stackoverflow/index.php?signupsucess=error&error=$showError");

}

?>
