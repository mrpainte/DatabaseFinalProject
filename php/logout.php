<?php
session_start();
	require_once('connect.php');
	if(!$conn){
		die();
	}
	if (isset($_SESSION["username"])){
	   $id = $_SESSION["username"];
	   $q = "call logout('".$id."');";
	   $result = mysqli_query($conn,$q);
	   session_destroy(); // they logged out. 
	   echo 1;
	}	
	else {
	     echo 0;
	}
$conn->close();
?>