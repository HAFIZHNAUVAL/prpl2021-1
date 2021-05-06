<?php
	session_start();
	include "conect.php";
?>
 
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Halaman login</title>
 </head>
 <body>
 <style type="text/css">
		body{
	margin-bottom: 0px;
	padding: 0px;
	background: url(sofa.jpg);
	background-size: cover;
	background-position: center;
	font-family: sans-serif;
	height: 100vh;
}
.login-box{
	width: 360px;
	height: 460px;
	background: rgba(47, 79, 79, 0.9);
	color: #fff;
	top: 50%;
	left:50%;
	position: absolute;
	box-sizing: border-box;
	padding: 70px;
	transform: translate(-50%,-50%);
}
.avatar{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: calc(50% - 50px);
}
h1{
	margin-top: 0px;
	padding: 0 0 20px;
	text-align: center;
	font-size: 22px;
}
.login-box p{
	margin-bottom: 0px;
	padding: 0px;
	font-weight: bold;
}
.login-box input{
	width: 100%;
	margin-bottom: 20px;
}
.login-box input[type="text"], input[type="password"]{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
}
.login-box button{
	width: 100%;
	margin-bottom: 20px;
}
.login-box button[type="login"]{
	border: none;
	outline: none;
	height: 40px;
	background: lightblue;
	font-size: 18px;
	border-radius: 20px;
}
.login-box button[type="login"]:hover{
	cursor: pointer;
	background: #E33D56;
	color: #fff;
}
.login-box a{
	text-decoration: none;
	font-size: 14px;
	color: #fff;
}
.login-box a:hover{
	color: lightblue;
}
	</style>
<div class="login-box">
		<img src="sofa.pjg" class="sofa">
		<h1>Form Login</h1>

 <form action="" method="post">
 	<ul>
 		<li>
 			<p>Username</p>
 			<input type="text" name="username" id="username">
 		</li>
 		<li>
 			<p>Password</p>
 			<input type="password" name="password" id="password">
 		</li>
 		<li>
 			<button type="submit" name="login">Login</button>
 		</li>
 		<a href="registrasi.php">belum punya akun?</a>

 	</ul>

 </form>
 	<?php
	require("conect.php");

	if (isset($_POST['login'])) {
		$username  =$_POST['username'];
		$password  =$_POST['password'];
        
		$qry =mysqli_query($conn, "SELECT * FROM masuk WHERE username = '$username' AND password = md5('$password')");
		$cek = mysqli_num_rows($qry);
		if ($cek==1){
			$_SESSION['userweb']=$username;
			header("location:artikel.php");
			exit;
		}

		else{
			
			echo "Maaf username dan password anda salah,silahkan coba lagi!!!";
		}		
}
	  ?>
 </body>
 </html>