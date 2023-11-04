<?php
require 'function.php';

$dosen = query("SELECT * FROM dosen") ;
 
if(isset($_POST["cari"])){
	$dosen = cari($_POST["keyword"]);
}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Tampilan</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 	 <style type="text/css">
      * {
        font-family: "Trebuchet MS";

      }
      body{
      	background-image: url(background.jpg);
      	background-repeat: no-repeat;
				background-size: 120%;
				background-position: top;
      }
      h1 {
        text-transform: uppercase;
        color: royalblue7;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 90%;
      margin: 10px auto 10px auto;
      box-shadow: 0 0 20px gray;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: skyblue;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }

    .cari{
    	float: right;
    	margin-right: 5%;
    }
    </style>
 </head>
 <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="btn btn-outline-primary" href="tampilan.php">KULIAH</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li>||</li>
        <li class="nav-item dropdown">
          <a class="btn btn-outline-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            HALAMAN
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../Mahasiswa/tampilan.php">Mahasiswa</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../Dosen/tampilan.php">Dosen</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../Mata Kuliah/tampilan.php">MATKUL</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../krs/tampilan.php">KRS</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../Jadwal/tampilan.php">Jadwal</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../khs/tampilan.php">KHS</a></li>
          </ul>
        </li>
        <li>||</li>
        <li class="nav-item">
          <a class="btn btn-outline-primary" aria-current="page" href="laporan_pdf.php">PRINT</a>
        </li>
      </ul>
      <form class="d-flex" role="search" action="" method="POST">
        <input class="form-control me-2" type="text" name="keyword" placeholder="Search..." aria-label="Search" autofocus autocomplete="off">
        <button class="btn btn-outline-primary" type="submit" name="cari">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- AKHIR NAVBAR -->

 	 <center><h1>DATA DOSEN</h1><center>
    <a href="tambah.php" class="btn btn-primary shadow p-3"> &nbsp; Tambah Dosen</a><br>
    <div class="cari">
 <a href="laporan_pdf.php" target="_blank" class="btn btn-primary"><i class="fa fa-file-pdf-o"></i> PRINT</a>
  </div><br><br>
    	</div>
   <form >

   </form>

 <br><br>
 <div class="container">
 <table class="table shadow p-3 mb-5 bg-body rounded" >
<thead class="thead-dark">
 	<tr>
 		<th>Kode Dosen</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>No Telepon</th>
		<th>Foto</th>
		<th>Action</th>
	</tr>
</thead>
<tbody>
	<?php foreach ($dosen as $row): ?>
	<tr>
		<td><?php echo $row['kode_dosen'];?></td>
		<td><?php echo $row['nama_dosen'];?></td>
		<td><?php echo $row['alamat'];?></td>
		<td><?php echo  $row['no_hp'];?></td>
		<td style="text-align: center;"><img src="../img/<?= $row ['foto']; ?>" style = "width: 120px;"></td>
		<td> <a href="edit.php?id=<?=$row["kode_dosen"] ?>" class="btn btn-primary" > <i class="fa fa-file-pdf-o"></i>edit</a> || 
			 <a href="hapus.php?id=<?=$row["kode_dosen"] ?>" class="btn btn-primary" onclick="return confirm('Yakin ingin menghapus data ?');">hapus</a>
			</td>
			</tr>
	<?php endforeach ; ?>

</tbody>
 </table>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 </body>
 </html>