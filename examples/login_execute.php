<?php
	
include ("config.php");
include ("user.php");

$email;
$password;
$img;

if (isset($_POST['email'])) 
	$email = htmlentities($_POST['email']);
if (isset($_POST['password'])) 
	$password = htmlentities($_POST['password']);

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($db, $query);
$user;
if(mysqli_num_rows($result) == 0){
          die("This username could not be found! ");
      }
      while ($row = mysqli_fetch_array($result)){
          $pass = $row['password'];
          $img = $row['img_profile'];
        
         
      }
/*while($row = mysqli_fetch_assoc($result)){
	$user = new User($row["email"], $row["password"], $row["name"], $row["surname"],$row["img_profile"], $row["about"]);
}
if (!$result || !isset($user)){
	//exit ("Користувача з поштою '$email' не існує в базі даних.");
	unset($email);
	header("location: ./examples/login-page.html");
}else{*/
	if($pass == $password){
		session_start();
		$_SESSION["loggedin"] = true;
		$_SESSION["email"] = $email;
		$_SESSION['img'] = $img;
		header("location: profile-page.php");		
	}else{
		header("location: login-page.html");	
	}
	
//}

?>