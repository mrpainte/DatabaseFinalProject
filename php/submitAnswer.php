<?php
	session_start();
	require_once('connect.php');
	if(!$conn){
		die();
	}

	$question = $_SESSION["question"]; // question number
	$newQuestion = $question+1;
	$eID = $_SESSION["eID"];	// exam number
	$value= $_POST["choice"];	// value to be choosen
	$user = $_SESSION["username"]; // username
	$q = "call store('".$user."',".$eID.",".$question.",'".$value."');";
	echo $q;
	$result = mysqli_query($conn,$q);
	echo $result;
	
	$_SESSION["question"]=$newQuestion; // increase to the new question
$conn->close();
?>
	