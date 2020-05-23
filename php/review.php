<?php
	session_start();
	require_once('connect.php');
	if(!$conn){
		die();
	}

	$msg="";
	$user = $_SESSION["username"];
	$eID = $_SESSION["eID"];
	$q = "call rview(".$eID.",'".$user."');";
	$result = mysqli_query($conn,$q);
	$total = 0;
	$taval = 0;
	$x =0;

	while ($data=mysqli_fetch_assoc($result)){
	
	      	 $total = $total + $data['qPoints'];
		 $taval = $taval + $data['pointsAward'];
	$text = "Question: ".$data['question']."<br>Your Answer: ".$data['qAnswer']."<br>Correct Answer: ".$data['correctAnswer']."<br>Points: ".$data['qPoints']."<br>Points you recieved: ".$data['pointsAward']."<br><br>";
	$msg=$msg.$text;
	}
/*
	while ($data=mysqli_fetch_assoc($result)){
	      echo $data['question'];
	}
*/
//	echo $temp;
	$text = "Total Points: ".$total."<br>Points you Recieved: ".$taval;
	$msg=$msg.$text;
	echo $msg;

$conn->close();
?>