<?php
	session_start();
	$msg="<form method='post'>";
	require_once('connect.php');
	if(!$conn){
		die();
	}
	$question = $_SESSION["question"];
	$eID = $_SESSION["eID"];
	$q = "call display('".$eID."','".$question."');";
	$result= mysqli_query($conn,$q);
	if (mysqli_num_rows($result)==0){
	   $_SESSION['question']=1;
	   echo "<p>Quiz Finished, please click Button check scores</p>";
	   echo "<input type='submit' onclick='review()' value='REVIEW'>";
	   
	}else {
		$question = "";
		  $x = 0;
		while ($data = mysqli_fetch_assoc($result)){
		      if($x == 0){
	      	      $question=$data['question'];
	      	      $msg=$msg.$question."<br>";
	      	      }
	      	      $x=$x+1;
	      	$text = "<input type='radio' id='r".$x."' name='".$data['choice']."' value='".$data['choice']."'>".$data["answer"]."<br>";
		$msg=$msg.$text;
		$text="";
		}
		$msg = $msg."</form>";
		echo  $msg;
	}
$conn->close();
?>