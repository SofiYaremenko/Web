<?php
	
include ("config.php");
include ("user.php");

$firstName;
$lastName;
$email;
$password;

$img = "../assets/img/basic-bear-avatar.png";

if (isset($_POST['firstName'])) 
	$firstName = htmlentities($_POST['firstName']);
if (isset($_POST['lastName'])) 
	$lastName = htmlentities($_POST['lastName']);
if (isset($_POST['email'])) 
	$email = htmlentities($_POST['email']);
if (isset($_POST['password'])) 
	$password = htmlentities($_POST['password']);

//$user = new User($email, $password, $firstName, $lastName, $img, "");

$query = "SELECT email FROM users WHERE email='$email'";
$result = mysqli_query($db, $query);
if (!$result){
	unset($email);
	exit ("Користувач з поштою '$email' вже існує в базі даних. Реєстрація не можлива.");
}else{
	$query = "INSERT INTO users (email,password,name,surname,img_profile,about) VALUES ('$email','$password','$firstName','$lastName','$img','')";
	$result = mysqli_query($db, $query);
	if($result ){
		session_start();
		$_SESSION["loggedin"] = true;
		$_SESSION["email"] = $email;
		header("location: ./examples/profile-page.php");		
	}else{
			
		header("location: ./examples/register-page.html");
	}	
	
}

?>