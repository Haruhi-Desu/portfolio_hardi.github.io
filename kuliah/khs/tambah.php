<?php
	require ('function.php');

	$id = $_GET["id"];

	$khs = query("SELECT * FROM jadwal WHERE nim = $id")[0];

			
	if(isset($_POST["submit"])){
		if(tambah($_POST < 0)){
			echo "<script>
			alert('Data Berhasil Ditambahkan');
			document.location.href = 'tampilan.php';
			</script>";
		}else{
			"<script>
			alert('Data Gagal Ditambahkan');
			document.locaion.href = 'tampilan.php';
			</script>";
		}
	} 

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		*{

			font-family: helvetica;
		}
		body{
			
			color: white;
		}
		h1{
			color: black;
		}
		.judul{
			margin-top: 25vh;
		}
		.tabel{
			border-radius: 20px;
			padding: 50px;
			background-color: gray;
			width: 25%;
			box-shadow: 15px 20px 0px 0px darkgrey;

		}
		.tabel input{
			border-radius: 5px;
			border: none;
			width: 220px;
			height: 30px;
		}
		.tabel textarea{
			border-radius: 5px;
			border: none;
			width: 448px;
		}
		.tabel button{
			height: 25px;
			width: 227px;
		}
		select{
			width: 250px;
			height: 30px;
		}

	</style>
</head>
<body>
	<center>
	<div class="judul">
		<h1>Form Khs</h1>
		
	</div></center>

	<form action="" method="post">
	<center>
	<div class="tabel">
		<input type="hidden" nama="id">
		Nim &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
		<input type="hidden" name="nim" value="<?= $khs['nim'];  ?>"><?= $khs['nim'];  ?><br><br>
		
		Kode Mk &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
		<input type="hidden" name="kode_mk" value="<?= $khs['kode_mk'];  ?>"><?= $khs['kode_mk'];  ?><br><br>

		<input type="text" name="thn_akademik" placeholder="Tahun Ajaran"><br><br>

		<input type="text" name="semester" placeholder="Semester"><br><br>
		<input type="text" name="nilai" placeholder="Nilai"><br><br>
			
		</select><p>
		<button type="submit" name="submit">Tambah</button>
			<button type="reset" >Reset</button>
	</div></center>
</form>

</body>
</html>


</body>
</html>