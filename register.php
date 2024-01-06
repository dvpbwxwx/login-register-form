<?php 
include 'config.php';

if(isset($_POST["register"])){

	$username=strtolower(stripslashes($_POST["username"]));
	$password=mysqli_escape_string($conn, $_POST["password"]);

}

// cek kesamaan user

$cekuser=mysqli_query($conn, "SELECT username FROM user WHERE username='$username'");
if(mysqli_fetch_assoc($cekuser)){
	echo "<script>
	alert('Sudah ada username yang sama');
	</script>";
	return false;
}

//enkripsi

//$pwd=password_hash($password, PASSWORD_DEFAULT);


//querry


$sql=mysqli_query($conn,"INSERT INTO user VALUES('','$username','$password')
	");

if($sql){
	header("Location:index.php");

}else{

	mysqli_error($conn);

}

 ?>

