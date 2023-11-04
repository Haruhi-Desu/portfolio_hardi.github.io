<?php 
require "function.php";

if (isset($_POST['registrasi'])) {
	if (registrasi ($_POST) > 0) {
		echo "<script>
				alert('data berhasil ditambahkan');
			  </script>";
	}else{
		echo "<script>
				alert('data berhasil gagal ditambahkan');
			  </script>";
	}
}
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrasi</title>
</head>
<body>
	<h1>Halaman Registrasi</h1>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Username :</td>
				<td>
					<input type="text" name="username" autofocus autocomplete="off" required>
				</td>
			</tr>
			<tr>
				<td>Nama Lengkap :</td>
				<td>
					<input type="text" name="nama_lengkap" autofocus autocomplete="off" required>
				</td>
			</tr>
			<tr>
				<td>Password :</td>
				<td>
					<input type="password" name="password" required>
				</td>
			</tr>
			<tr>
				<td>Konfirmasi Password :</td>
				<td>
					<input type="password" name="password2">
				</td>
			</tr>
			<tr>
				<td>Level</td>
				<td>
					<select name="level">
						<option value="admin">Admin</option>
						<option value="user">User</option>
						<option value="managemen">managemen</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<button type="submit" name="registrasi">REGISTRASI</button>
				</td>
			</tr>
			<tr>
				<td>
					<a class="btn btn-danger btn-lg" href="../login/index.php" role="button">Login</a>
				</td>
			</tr>

		</table>
	</form>
</body>
</html>