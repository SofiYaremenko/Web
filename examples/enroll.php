<?php
	session_start();
	$email = $_SESSION['email'];
	if(isset($email)){
		include ("config.php");
		$id = $_POST['id'];
		echo $email." - ".$id;
		
		$query = "INSERT INTO u_c_comments (fk_user,fk_course) VALUES ('$email','$id')";
		$result = mysqli_query($db, $query);
	}else{
		
	}
	header("location: courses.php");
?>