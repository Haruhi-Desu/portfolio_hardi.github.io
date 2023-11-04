<?php
require ('function.php');

$id = $_GET["id"];


$matkul = query("SELECT * FROM matkul WHERE id = $id")[0];


if(isset($_POST["submit"])){
	if(edit($_POST>0)){
		echo 
		"<script>
		alert('Data berhasil diubah');
		document.location.href = 'tampilan.php';
		</script>";
	}else{
		echo
		"<script>
		alert('Data gagal diubah');
		document.location.href = 'tampilan.php';
		</script>";
	}

}

 ?>






<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Edit Data Dosen</title>
		<style type="text/css">
			* {

				font-family: "Trebuchet MS";
			}
			body {
				background-image: url(background.jpg);
				background-repeat: no-repeat;
				background-size: 100% 100%;

			}
			h2 {
				color: white;
				text-align: center;
				margin-left: 5%;
				margin-top: 10px;
			}
			#form{
				background-color: rgba(76, 76, 76, 0.25);
				backdrop-filter: blur(6px);
				box-shadow: 0 1px 20px rgba(21, 21, 21, 0.66);
				border-radius: 20px;
				padding: 10px;
				width: 365px;
				height: 510px;
				margin-top: 10%;
				margin-left: 37%;

			}
			input, textarea{

			}
			table{
				color: white;
			}
			
		</style>
	</head>
	<body bgcolor="grey">
	<div id="form">
    <table align="center" >
		
		<form action="" method="POST" enctype="multipart/form-data">
		<table align="center">
			<h2><center>EDIT DATA MATA KULIAH </center></h2>
		</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<input type="hidden" name="id" value="<?= $matkul['id'];?>">
		<tr>
			<td>Kode Matkul</td>
			<td>:</td> 
			<td><input type="hidden" name="kode_mk" value="<?= $matkul['kode_mk'];?>" /><?= $matkul['kode_mk'];?></td>
		</tr>
			<td>Nama Matkul</td>
			<td>:</td>
			<td><input type="text" name="nama_mk" value="<?= $matkul['nama_mk'];?>" /></td>
		</tr>
			<td>Kode Dosen</td>
			<td>:</td>
			<td><select name="kode_dosen" >
      <option value="<?php echo $matkul['kode_dosen'];?>"><?php echo $matkul['kode_dosen'];?></option>
      <?php 
      $kode=mysqli_query($con, "SELECT * FROM dosen");
      while ($data = mysqli_fetch_array ($kode)) {
      ?>
      <option value="<?php echo $data['kode_dosen'];?>"><?php echo
      $data['kode_dosen'];?></option>
      <?php 
      }
      ?>
    </select></td>
		</tr>

		<tr>
			<td>Nama Matkul</td>
			<td>:</td>
			<td><input type="text" name="sks" value="<?= $matkul['sks'];?>" /></td>
		</tr>

		<tr>
				<td>&nbsp;</td>
			</tr>
			
		<tr>
			<td colspan="2">&nbsp;</td>
			
			<td><button type="submit" name="submit">Simpan</button> ||
				<input type="reset" name="reset" value="Batal"></td>
		</tr>
		</table>
		</form>
		</div>
	</table>
	</body>
</html>
`