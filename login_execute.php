<?php
	
include ("config.php");
include ("user.php");

$email;
$password;

if (isset($_POST['email'])) 
	$email = htmlentities($_POST['email']);
if (isset($_POST['password'])) 
	$password = htmlentities($_POST['password']);

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($db, $query);
$user;
/*while($row = mysqli_fetch_assoc($result)){
	$user = new User($row["email"], $row["password"], $row["name"], $row["surname"],$row["img_profile"], $row["about"]);
}
if (!$result || !isset($user)){
	//exit ("Користувача з поштою '$email' не існує в базі даних.");
	unset($email);
	header("location: ./examples/login-page.html");
}else{*/
	if($user->getPassword() == $password){
		session_start();
		$_SESSION["loggedin"] = true;
		$_SESSION["email"] = $email;
		header("location: ./examples/profile-page.php");		
	}else{
		header("location: ./examples/login-page.html");	
	}
	
//}

?>