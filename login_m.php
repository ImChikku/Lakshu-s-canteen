<?php
session_start(); 
$error=''; 

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "username or Password is invalid";
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];
require 'connection.php';
$conn = Connect();

$query = "SELECT username, password FROM MANAGER WHERE username=? AND password=? LIMIT 1";

$stmt = $conn->prepare($query);
$stmt -> bind_param("ss", $username, $password);
$stmt -> execute();
$stmt -> bind_result($username, $password);
$stmt -> store_result();

if ($stmt->fetch())  
{
	$_SESSION['login_user1']=$username;
	header("location: mycanteen.php"); 
} else {
$error = "username or Password is invalid";
}
mysqli_close($conn); 
}
}
?>