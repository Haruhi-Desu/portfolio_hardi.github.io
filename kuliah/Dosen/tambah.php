<?php 

  require 'function.php';

  if (isset($_POST['submit'])) {
    if (tambah($_POST < 1)) {
      echo "<script>
      alert('Berhasil Menambahkan Data');
      document.location.href = 'tampilan.php';
      </script>";
    } else{
      echo "<script>
      alert('Gagal Menambahkan Data');
      document.location.href = 'tampilan.php';
      </script>";
    }
  }

 ?>

 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FORMULIR DOSEN</title> 
  <style type="text/css">
      * {

        font-family: "Trebuchet MS";
      }
      body {
        background-image: url(background.jpg);
        background-repeat: no-repeat;
        background-size: 100% 100%;

      }
      h1 {
        color:  royalblue;
        text-align: center;
        margin-left: 5%;
        margin-top: 10px;
      }
      .form{
        background-color: rgba(76, 76, 76, 0.25);
        backdrop-filter: blur(6px);
        box-shadow: 0 1px 20px rgba(21, 21, 21, 0.66);
        border-radius: 20px;
        padding: 10px;
        width: 365px;
        height: 510px;
        margin-top: 10%;
        
      }
      table{
        color: white;
      }
      
      
    </style>
 </head>
 <body>
<center>
  <div class="form ">
  <form action="" method="POST" enctype="multipart/form-data">
   <h1>Formulir Dosen</h1> 
    <input type="text" name="kode_dosen" placeholder="Kode Dosen" ><br><p>
    <input type="text" name="nama_dosen" placeholder="Nama Dosen"><br><p>
    <textarea name="alamat" placeholder="Alamat"></textarea><br><p>
    <input type="text" name="no_hp" placeholder="Nomor Telepon"><br><p>
    <input type="file" name="foto"><br><p>

    <button type="submit" name="submit">Tambah</button>
  </form>
  </div>
  </center>
 </body>
 </html>