<?php 

$con = mysqli_connect("localhost","root" ,"","kuliah");



function registrasi($data) {
	global $con;
	$pass = md5($_POST['password']);
	$username = strtolower(stripslashes($data["username"]));
	$nama_lengkap =($data["nama_lengkap"]);
	$password = mysqli_real_escape_string($con, $pass);
	$password2 = mysqli_real_escape_string($con, $pass);
	$level = $data["level"];


	//cek username sudah ada atau belum
	// mysqli_query($con, "SELECT * FROM login WHERE id = '$id'");
	// if ( mysqli_fetch_assoc ($result)){
	// 	echo "<script>
	// 			alert('username sudah ada, mohon gunakan username lain');
	// 		  </script>";
			  
	// }


	//cek password 
	if ($password !== $password2) {
		echo "<script>
				alert('password tidak sama');
			  </script>";
			  return false;
	}


	// Tambahkan user baru ke database
	mysqli_query($con, "INSERT INTO login VALUES('','$username','nama_lengkap','$password','$level')");

	return mysqli_affected_rows($con);


}
























 ?>
