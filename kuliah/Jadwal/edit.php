<?php  
    require 'function.php';
    $id = $_GET["id"];

    $mk = query("SELECT * FROM jadwal WHERE id = $id")[0];

    if (isset($_POST["submit"])) {
        if (edit($_POST < 1)) {
            echo "<script>
                alert('Data Berhasil Diedit');
                document.location.href = 'tampilan.php';
            </script>";
        }
        else{
            echo "<script>
                alert('Data Gagal Diedit');
                document.location.href = 'tampilan.php';
            </script>";
        }
    }
?>

<html>
    <head>
        <title>Mata Kuliah</title>
        <style>
            *{
                box-sizing: border-box;
                font-family: Trebuchet MS;
            }
            h1{
                margin-top: 6%;
            }
            .form{
                background-color: #D7E9F1;
                padding: 20px;
                width: 30%;
                height: 53%;
                border-radius: 20px;
                transition: 0.3s;
            }
            .form:hover{
                box-shadow: 10px 10px 0 gray;
                transition: 0.3s;
            }
            input{
                height: 30px;
                width: 90%;
            }
            button{
                height: 30px;
                width: 44%;
            }
            a{
                text-decoration: none;
                color: black;
                font-family: sans-serif;
                background-color: #D7E9F1;
                padding: 10px;
                border-radius: 20px;
            }
            select{
                width: 90%;
                height: 30px;
            }
            p{
                text-align: left;
                margin-top: 0;
                margin-left: 6%;
            }
        </style>
    </head>
    <body>
        <center>
        <h1>Edit Jadwal</h1>
        <div class="form">
            <form action="" method="POST"><p>
                <input type="hidden" name="id">
                Kode Matkul : <input type="hidden" name="kode_mk" value="<?= $mk['kode_mk']; ?> "><?= $mk['kode_mk']; ?><p>
                Nama Matkul : <input type="hidden" name="nama_mk" value="<?= $mk['nama_mk']; ?> "><?= $mk['nama_mk']; ?><p>
                <input type="text" name="jam" value="<?= $mk['jam']; ?>"><p>
                <input type="text" name="jumlah_sks" value="<?= $mk['jumlah_sks']; ?>"><p>
                Kode Dosen : <input type="hidden" name="kode_dosen" value="<?= $mk['kode_dosen']; ?> "><?= $mk['kode_dosen']; ?><p>

                <select name="nim" >
      <option value="<?php echo $mk['nim'];?>" ><?php echo $mk['nim'];?></option>
      <?php 
      $kode=mysqli_query($con, "SELECT * FROM mahasiswa");
      while ($data = mysqli_fetch_array ($kode)) {
      ?>
      <option value="<?php echo $data['nim'];?>"><?php echo
      $data['nim'];?></option>
      <?php 
      }
      ?>
    </select><br><br>

    <button type="submit" name="submit">Tambah</button>
    <button type="reset">Hapus</button>
            </form>
            </div>
        </center>
    </body>
</html>