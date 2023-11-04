<?php 

  require 'function.php';

  if (isset($_POST['submit'])) {
    if (tambah($_POST < 1)) {
      echo "<script>
      alert('berhasil');
      document.location.href = 'tampilan.php';
      </script>";
    } else{
      echo "<script>
      alert('ggl');
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
  <title>FORMULIR MATA KULIAH</title> 
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
  <div class="form">
  <form action="" method="POST" enctype="multipart/form-data">
    <h1>Formulir Mata Kuliah</h1>
    <input type="hidden" name="id"><br>
    <input type="text" name="kode_mk" placeholder="Kode Matkul"><br>
    <input type="text" name="nama_mk" placeholder="Nama Mata Kuliah"><br>
    <select name="kode_dosen" >
      <option value="" >Kode Dosen</option>
      <?php 
      $kode=mysqli_query($con, "SELECT * FROM dosen");
      while ($data = mysqli_fetch_array ($kode)) {
      ?>
      <option value="<?php echo $data['kode_dosen'];?>"><?php echo
      $data['kode_dosen'];?></option>
      <?php 
      }
      ?>
    </select><br>
    <input type="text" name="sks" placeholder="SKS"><br><br>
    <button type="submit" name="submit">Tambah</button>
  </form>
  </div>
 
 </body>
 </html>