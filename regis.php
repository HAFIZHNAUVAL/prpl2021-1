<?php 
$conn = mysqli_connect("localhost","root","","sign_up");

function ($data){
	global $conn;

	$username = strtolower (stripslashes($conn, $data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($data["password2"]);

	$result = mysqli_query($conn, "SELECT username FROM masuk WHERE username = '$username' ");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
        alert('username sudah terdaftar!!');
		</script>";

		return false;
		# code...
	}

	if ( $password !== $password2 ) {
		echo "<script>
        alert('konfirmasi password tidak sesuai!!');
		</script>";
		# code...
		return false;
	}
	$password = password_hash($password, PASSWORD_DEFAULT);
	var_dump(password); die;

	mysqli_query($conn, "INSERT INTO masuk VALUES('','$username', '$password') ");

	return mysqli_affected_rows($conn);
}

?>
