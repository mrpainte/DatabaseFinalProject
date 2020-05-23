<?php
	require_once('connect.php');
	if(!$conn){
		die();
	}
	
	$user= $_POST['username'];
	$pwd= MD5($_POST['password']);
	$name = $_POST['fullname'];
	$major = $_POST['Newmajor'];	

	$q= "call enroll('".$name."','".$user."','".$pwd."','".$major."');";
	$result = mysqli_query($conn,$q);
	
	if($result){
		echo $result;
	}
	else {
	 echo $q; 
	 }

	 $conn->close();

?>