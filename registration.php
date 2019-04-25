<?php

//function reg(){
	
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

$user = new User($email, $firstName, $lastName, $img, "", $password);

$query = "SELECT email FROM users WHERE email='$email'";
$result = mysqli_query($db, $query);
if ($result == 'FALSE'){
	unset($email);
	exit ("Користувач з поштою '$email' вже існує в базі даних. Реєстрація не можлива.");
}else{
	$query = "INSERT INTO users (email,password,name,surname,img_profile,about) VALUES ('$email','$password','$firstName','$lastName','$img','')";
	$result = mysqli_query($db, $query);
	if($result ){
		header("location: ./examples/profile-page.html");		
	}else{
			
		header("location: ./examples/register-page.html");
	}	
	
}

//}
?>