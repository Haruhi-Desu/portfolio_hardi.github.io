		<?php
  require 'function.php'; //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include

			$jadwal = query ("SELECT * FROM jadwal");

      if (isset($_POST["cari"])) {
         $jadwal = cari ($_POST["keyword"]);
      }

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Data Jadwal</title>
     <!-- BOOTSTRAP CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      body{
      	animation: FadeIn ease 1.5s;
      }
      ::-webkit-scrollbar{
        width: 0;
      }
      .background{
        top: 0;
        left: 0;
        position: fixed;
        z-index: -1;
      }
      @keyframes FadeIn{
      	0%{
      		opacity: 0;
      	}
      	100%{
      		opacity: 1;
      	}
      }
      #table{
      	margin-top: -1%;
      }
      h1{
      	font-size: 2.5em;
      	text-align: center;
      	margin-top: 1%;
        color: white;
      }
    table {
    	background-color: rgba(76, 76, 76, 0.25);
			backdrop-filter: blur(6px);
			box-shadow: 0 1px 20px rgba(21, 21, 21, 0.66);
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 60%;
      margin: 15px auto 10px auto;
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
          border-radius: 10px;
          color: black;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    .cari{
      display: flex;
      justify-content: right;
    	padding: 10px;
    	margin-right: 7%;
    }
    .cari input{
    	border: 1px solid skyblue;
    	border-radius: 8px;
    	height: 27px;
    }
    .cari button{
    	background-color: skyblue;
    	border: none;
    	border-radius: 8px;
    	height: 30px;
    	width: 50px;
    }
    .print {
      position: absolute;
      right: 8%;
      }

    </style>
	</head>
	<body>
    <div class="background">
      <img src="../img/background.jpg.jpg" width="100%">
    </div>

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
        <input class="form-control me-2" type="search" name="keyword" placeholder="Search..." aria-label="Search" autofocus autocomplete="off">
        <button class="btn btn-outline-primary" type="submit" name="cari">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- AKHIR NAVBAR -->
<br><br>
    <div class="print">
    </div>
		<div id="table">
		<center><a href="view_tambah.php" class="but">+ &nbsp; Tambah Data</a></center><br>
    <form action="" method="POST">
        </form>
    <br>
		<table>
			<thead>
				<tr>
					<th>Kode Mata Kuliah</th>
					<th>Nama Mata Kuliah</th>
          <th>JAM</th>
          <th>SKS</th>
					<th>Kode Dosen</th>
          <th>NIM</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				<?php foreach ($jadwal as $row): ?>

				<tr>
					<td><?php echo $row['kode_mk']; ?></td>
					<td><?php echo $row['nama_mk']; ?></td>
          <td><?php echo $row['jam']; ?></td>
          <td><?php echo $row['jumlah_sks']; ?></td>
					<td><?php echo $row['kode_dosen']; ?></td>
          <td><?php echo $row['nim']; ?></td>
 			    <td><a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
           			     <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
   			    </tr>
        				 
     		    <?php endforeach ; ?>

			</tbody>
		</table>
		</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	</body>
</html>