<?php 
// memulai session

session_start();

include 'config.php';

// menangkap data dari form

$username=$_POST['username'];
$password=$_POST['password'];

// membuat query

$data=mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$password'");

// cek apakah ada data tersebut di database

$cek=mysqli_num_rows($data);

if($cek>0){
	$_SESSION['username']=$username;
	$_SESSION['status']="login";
	header("location:admin/index.php");
} else{
	header("location:index.php?pesan=gagal");

}
 ?>