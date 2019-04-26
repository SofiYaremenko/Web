<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="vos_resurs"; // Database name
$tbl_name="comments"; // Table name

// Connect to server and select databse.
$link = mysqli_connect("$host", "$username", "$password", "$db_name");
// Check connection
if($link === false){
    die("ERROR: Could not connect to DB. " . mysqli_connect_error());
}

// Get value of id that sent from hidden field
//$id=$_POST['id'];

// get values that sent from form
$a_email="natashka@ukr.net";
$a_course="3";

$a_uc = '3';
$a_answer=$_POST['a_answer'];

$datetime=date("y/m/d H:i:s"); // create date and time

// Insert answer
$sql2="INSERT INTO $tbl_name(comment, datetime, fk_u_c)VALUES('$a_answer', '$datetime', '$a_uc')";
$result2=mysqli_query($link,$sql2);

if($result2){
    header("location: forum.php");
}else {
    echo "ERROR";
}
// Close connection
mysqli_close($link);
?>