<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 
include '../config.php';

// session

session_start();

// cek

if($_SESSION['status']!="login"){
	
	header("location:../index.php");

}

echo "<br>";
echo "Selamat datang di website kami ".$_SESSION['username'];
echo "<br>";
echo "<br>";
 ?>
<a href="logout.php">LOGOUT</a>
 </body>
</html>