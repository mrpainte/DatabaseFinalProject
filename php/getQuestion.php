<?php
session_start();
	require_once('connect.php');
	if(!$conn){
		die();
	}
	if(!isset($_SESSION["question"])){
		$_SESSION["question"] = 1;
	}
	if(!isset($_SESSION["eID"])){
		$_SESSION["eID"] = $_POST["value"];
	}
//	$exam = $_POST["value"];
//	$question = $_SESSION["question"];
	$exam = '200';
	$question = '1';
	$q = "call display('".$exam."','".$question."')";
	$result = mysqli_query($conn,$q);
	echo $result;

$conn->close();
	

?>