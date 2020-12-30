<?php


if ($_SERVER["REQUEST_METHOD"]=="POST") {
 

include 'dbconnect.php';

$loginmail=$_POST['loginmail'];
$loginpass=$_POST['loginpass'];

   $sql="Select * from 'user' where u_email='$loginmail' ";
   $result =mysqli_query($conn,$sql);
    $numRows =mysqli_num_rows($result);
   if ($numRows==1) {

	   $row=mysqli_fetch_assoc($result);
       if (password_verify($loginpass, $row['u_pass'])) {
       session_start();
	   $_SESSION['loggedin']=true;
	   $_SESSION['useremail']=$loginmail;
	   echo "Logged in ".$loginmail;
	   //header("Location:/stackoverflow/index.php");


	 	}else{

	 		echo "Unable to logion";
	 	}
	 }

	 }

?>
