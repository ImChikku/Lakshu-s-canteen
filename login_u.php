<?php
session_start(); 
$error=''; 

if (isset($_POST['submit'])) {
if (empty($_POST['rollno']) || empty($_POST['password'])) {
$error = "rollno or Password is invalid";
}
else
{

$rollno=$_POST['rollno'];
$password=$_POST['password'];

require 'connection.php';
$conn = Connect();


$query = "SELECT rollno, password FROM CUSTOMER WHERE rollno=? AND password=? LIMIT 1";


$stmt = $conn->prepare($query);
$stmt -> bind_param("ss", $rollno, $password);
$stmt -> execute();
$stmt -> bind_result($rollno, $password);
$stmt -> store_result();

if ($stmt->fetch())  
{
	$_SESSION['login_user2']=$rollno;
	header("location: foodlist.php"); 
} else {
$error = "rollno or Password is invalid";
}
mysqli_close($conn);
}
}
?>