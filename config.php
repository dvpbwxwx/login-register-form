<?php 
$servername="localhost";
$username="root";
$password="";
$database="uts";

$conn = new mysqli ($servername,$username,$password,$database);

if($conn->connect_error){
	die("Koneksi error : " .$conn->connect_error);
}

echo "Koneksi Sukses";
 ?>
