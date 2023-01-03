<?php
session_start();
include('connection.php');
$payment=$_POST["payment"];
mysqli_query("INSERT INTO orders (payment) VALUES('$payment')");
header("location:COD.php?");
mysqli_close($conn);
?>