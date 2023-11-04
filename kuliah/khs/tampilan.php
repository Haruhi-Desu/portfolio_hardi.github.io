<?php
  require 'function.php';

  $khs = query("SELECT * FROM khs");
  
  //tombol cari 
  if(isset($_POST["cari"])) {
  	$khs = cari($_POST["keyword"]);
 
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Form KHS</title>
	<!-- BOOTSTRAP CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style type="text/css">
      * {
        font-family: helvetica;
      }
      body{
		background-image: url(../img/background.jpg.jpg);
		background-size: 100%;
      	animation: fadeInAnimation ease 1s;
				animation-fill-mode: forwards;
				/*animation-iteration-count: 12;*/
      }
      @keyframes fadeInAnimation{
      	0%{
      		opacity: 0;
      	}
      	100%{
      		opacity: 1;
      	}
      }
      #table{
      	margin-top: ;
      }
      h1 {
   	 		text-align: center;
    		margin-top: 10%;
        text-transform: uppercase;
        color: #03e5ce;
        transition: 6px;
      }
    table {
    		/*box-shadow: 15px 20px 0px 0px slateblue;*/
     	 	border: solid 1px rgb(0, 0, 0);
      	border-collapse: collapse;
     	 	border-spacing: 0;
      	width: 90%;
      	margin: 10px auto 10px auto;
        border-radius: 20px;
    }
    table thead th {
        	background-color: #008080;
        border: solid 1px rgb(0, 0, 0);
        color: white;
        padding: 10px;
        text-align: left;
        text-decoration: none;
        position: relative;
    }
    table tbody td {
    	border-radius: px;
    	margin-bottom: 20px;
    		background-color: #a3b899;
        color: white;
        padding: 10px;
        

    }
    a {
    			border-radius: 4px;
          background-color: #464444;
          color: white;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    form {
    	margin-left: 64px;
    }
    form input{
    	height: 35px;
    	width: 250px;
    }
    form button{
    	height: 35px;
    	width: 80px;
    	text-decoration: none;
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
        <input class="form-control me-2" type="search" name="keyword" placeholder="Search..." aria-label="Search" autofocus autocomplete="off">
        <button class="btn btn-outline-primary" type="submit" name="cari">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- AKHIR NAVBAR -->
		<h1>Status Khs</h1>
		<div id="table">
		<center><a href="view_tambah.php">&nbsp; Tambah Data</a>
      <a href="laporan_pdf.php">&nbsp; Print data</a></center><br>
		<form action="" method="POST">
			<input type="text" name="keyword" autofocus placeholder="Cari" autocomplete="off">
			<button type="submit" name="cari">Search</button>

		</form>
		<table>
			<thead>
				<tr>
					<th>NIM</th>
					<th>Kode MataKul</th>
					<th>Tahun Akademik</th>
					<th>Semester</th>
          <th>Nilai</th>
          <th>Action</th>
				</tr> 
			</thead>
			<tbody>
				<?php
            		
            		
				 foreach ($khs as $row):?>
				 	<tr>
					
	      <td><?php echo $row['nim']; ?></td>
		  <td><?php echo $row['kode_mk']; ?></td>
          <td><?php echo $row['thn_akademik']; ?></td>
          <td><?php echo $row['semester']; ?></td>
					<td><?php echo $row['nilai']; ?></td>
								<td><a href="edit.php?id=<?php echo $row['nim']; ?>">Edit</a> ||
									<a href="hapus.php?id=<?php echo $row['nim'];?>"
									 onclick="return confirm('Anda yakin akan menghapus data ini')">Hapus</a></td>
								</tr>
								<?php endforeach ; ?>
    		    	    			 
			</tbody>
		</table>
		</div>
	</body>
</html>
	</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	
</body>
</html>


