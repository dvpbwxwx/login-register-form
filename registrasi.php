<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Form</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<div class="overlay"></div>
<br>
<center><h2>Register Form</h2></center>
<br>

<div class="register">
	<form method="post" action="register.php" onsubmit="return validasi()">
		<div class="header">
	<h4>Register Your Account</h4>
	<p>Silahkan Registrasi untuk membuat akun anda.</p>
</div>
		<div>
			<label>Username :</label>
			<input type="text" name="username" id="username" required>
		</div>
		<div>
			<label>Password :</label>
			<input type="password" name="password" id="password" required>
		</div>
		<div>
			<label>Tuliskan Ulang Password :</label>
			<input type="password" name="password2" id="password2" required>
		</div>
		<div class="tombol">
			<center><button type="submit" name="register">REGISTER</button></center>
		</div>
		Sudah punya akun ? <a href="index.php">Login</a>
	</form>	
</div>
<script type="text/javascript">
	function validasi(){
		var username=document.getElementById("username").value;
		var password=document.getElementById("password").value;
		var password2=document.getElementById("password").value;
		if(password!==password2){
			alert('=password tidak sama');
			return false;
		} else{
			
			return true;
		}
	}
</script>
</body>
</html>