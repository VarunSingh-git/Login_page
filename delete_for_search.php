<?php
include("connection.php");
error_reporting(0);
session_start();
$user_prof=$_SESSION['user_name'];
if($user_prof==true){
	
}
else{
	header("location: login_index.php");
}

$id=$_GET['id'];

$query="DELETE FROM student WHERE id = '$id'";

$data=mysqli_query($con,$query);

if($data==true){
header ("location: search.php");
}
else{
	echo "Record deleted failed...";
}
?>