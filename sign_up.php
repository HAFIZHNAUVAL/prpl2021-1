<!DOCTYPE html>
<html>
<head>
	<title>Halaman registrasi</title>
</head>
<body>
<style  type="text/css">	
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
	height: 500px;
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
.login-box button[type="register"]{
	border: none;
	outline: none;
	height: 40px;
	background: lightblue;
	font-size: 18px;
	border-radius: 20px;
}
.login-box button[type="register"]:hover{
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
	<form action="" method="post">
		<h1>Form Registrasi</h1>
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
 			<p>Konfirmasi Password</p>
 			<input type="password" name="password2" id="password2">
 		</li>
 		<li>
 			<button type="submit" name="register">Register</button>
 		</li>
 		<center><a href="login1.php">Silahkan masuk</a></center>

 	</ul>
	</form>
<?php 
require("regis.php");
if( isset($_POST["register"])){

	if( isset ($_POST) > 0) {
		echo "<script>
        alert('user baru berhasil di tambahkan');
		</script>";
	} else {
		echo mysql_error($conn);
	}
}

 ?>
</body>
</html>

  <?php
              include "regis.php"; //untuk mengkoneksikan ke database
              if (isset($_POST['daftar'])) {  //terdapat percabangan
                  //ambil data dari form
                  //terdapat properti antara lain username,password,repeat password,email  
                  $Username=$_POST['Username'];
                  $Password=$_POST['Password'];
                  $Password2=$_POST['Repeat Password'];
                  $Email=$_POST['Email'];
                  //buat token
                  $token=hash('sha256', md5(date('Y-m-d'))) ;
                  //cek user terdaftar
                  $sql_cek=mysqli_query($koneksi,"SELECT * FROM users WHERE email='".$Email."'");
                  $r_cek=mysqli_num_rows($sql_cek);
                  if ($r_cek>0) {
                    echo '<div class="alert alert-warning">
                            Email anda sudah pernah terdaftar!
                          </div>';
                  }else{
                    //jika data kosong maka insert ke tabel;
                    //aktif =0 user belum aktif
                    $insert=mysqli_query($koneksi,"INSERT INTO users(username,password,nama,email,no_hp,token,aktif) VALUES('".$Username."','".$Password."','".$Nama."','".$Email."','".$Telepon."','".$token."','0')");
                    //include kirim email
                    include("mail.php");

                    if ($insert) { // terdapat percabangan if,jika inputan dan klik tombol register berhasil maka akan muncul pesan "pendaftaran anda berhasil" ,dan setelah berhasil maka akan ada tombol pilihan untuk menuju ke menu login 
                        echo '<div class="alert alert-success">
                            Pendaftaran anda berhasil, silahkan cek email anda untuk aktifasi. 
                            <a href="login.php">Login</a>
                          </div>';
                    }

                  }                  
              }

            ?>