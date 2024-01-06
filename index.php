<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="overlay"></div>
<br>
<center><h2>Login Form</h2></center>
<br>

<div class="login">
	<form method="post" action="login.php" onsubmit="return validasi()">
		<div class="header">
	<h4>Login To Your Account</h4>
	<p>Silahkan Login untuk mengakses akun anda.</p>
</div>
		<div>
			<label>Username :</label>
			<input type="text" name="username" id="username">
		</div>
		<div>
			<label>Password :</label>
			<input type="password" name="password" id="password">
		</div>
		<div class="tombol">
			<center><button type="submit" name="login">LOGIN</button></center>
		</div> 
		<center>Belum punya akun ? <a href="registrasi.php">Registrasi</a></center>
	</form>	
</div>

<script type="text/javascript">
	function validasi(){
		var username=document.getElementById("username").value;
		var password=document.getElementById("password").value;

		if(username!=""&&password!=""){
			return true;
		} else{
			alert('Tolong diisi username dan passwordnya');
			return false;
		}
	}
</script>
</body>
</html>