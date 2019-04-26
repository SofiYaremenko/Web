<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="vos_resurs"; // Database name
$tbl_name="comments"; // Table name
session_start();
// Connect to server and select databse.
$link = mysqli_connect("$host", "$username", "$password", "$db_name");
// Check connection
if($link === false){
    die("ERROR: Could not connect to DB. " . mysqli_connect_error());
}

// Get value of id that sent from hidden field

$id=$_POST['id'];
// get values that sent from form
$a_email=$_SESSION["email"];
$sql = "SELECT UC.id FROM u_c_comments UC WHERE UC.fk_user = '$a_email' AND UC.fk_course = '$id'";

echo $id . " -  " . $a_email;

$result = mysqli_query($link,$sql);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  $a_uc = $row["id"];
}
mysqli_free_result($result);


$a_answer=$_POST['a_answer'];

$datetime=date("y/m/d H:i:s"); // create date and time

if($a_uc){
	// Insert answer
$sql2="INSERT INTO $tbl_name(comment, datetime, fk_u_c)VALUES('$a_answer', '$datetime', '$a_uc')";
$result2=mysqli_query($link,$sql2);

if($result2){
   header("location: forum.php");
}else {
    echo "ERROR";
    }
}else {
    echo "You are not loggined";
}

// Close connection
mysqli_close($link);
?>