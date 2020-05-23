<?php
session_start();
	require_once('connect.php');
	if (!$conn){
	   die();
	 }
	 $user = $_POST['username'];
	
	 $pwd = $_POST['password'];    
	 $pwd = MD5($pwd); // hash the password
	 
	 $q2 = "select logi('".$user."','".$pwd."');";
	 $result = mysqli_query($conn,$q2);
	 if($result){
	 	$_SESSION["username"] = $user;		     
 	   	echo 1;
	   }
	    else {
	    	  echo 0;
		  }
		 
$conn->close();
?>