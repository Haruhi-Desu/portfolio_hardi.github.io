<?php 
  $con = mysqli_connect("localhost", "root", "", "kuliah");
  function query($query){
    global $con;
    $result = mysqli_query($con, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
      // code...
    }
    return $rows;

  }
   function edit($data){
        global $con;

        $id = ($_POST['id']);
        $nim = ($_POST['nim']);
        $kode_mk = ($_POST['kode_mk']);
        $thn_akademik = ($_POST['thn_akademik']);
        $semester = ($_POST['semester']);
        $nilai = ($_POST['nilai']);

        $query = "UPDATE khs SET
                    id = '$id',
                    nim = '$nim',
                    kode_mk = '$kode_mk',
                    thn_akademik = '$thn_akademik',
                    semester = '$semester',
                    nilai = '$nilai'

                    WHERE nim = $nim
                 ";
        mysqli_query($con, $query);

        return mysqli_affected_rows($con);
      }

  function tambah($id) {
    global $con;
    $id = ($_POST["id"]);
    $nim = ($_POST["nim"]);
    $kode_mk = ($_POST["kode_mk"]);
    $thn_akademik = ($_POST["thn_akademik"]);
    $semester = ($_POST["semester"]);
    $nilai = ($_POST["nilai"]);
    
    $query = "INSERT INTO khs VALUES ('$id','$nim','$kode_mk','$tahun_ajaran','$semester','$nilai')";

    mysqli_query($con, $query);
    return mysqli_affected_rows($con);
  }
  function upload1(){
    $namefiles = $_FILES['gambar']["name"];
    $ukuranfile = $_FILES['gambar']["size"];
    $error = $_FILES['gambar']["error"];
    $tmpname = $_FILES['gambar']["tmp_name"];

    if ($error === 4){
      echo"<script>
      alert('pilih gambar terlebih dahulu');
      </script>";
      return false;
    }

    $ekstensigambarvalid = ["jpg","jpeg","png"];
    $ekstensigambar = explode(".", $namefiles);
    $ekstensigambar = strtolower(end($ekstensigambar));

    if (!in_array($ekstensigambar, $ekstensigambarvalid)){
      echo"<script>
      alert('Yang Anda Upload Bukan gambar');
      </script>";
      return false;
    }
    move_uploaded_file($tmpname, "gambar/".$namefiles);
    return $namefiles;
  }
  function hapus($id){
    global $con;
    mysqli_query($con, "DELETE FROM khs WHERE id = '$id'");
    return mysqli_affected_rows($con);

  }
  function cari($keyword){
    $query = "SELECT * FROM khs
    WHERE 
    
    nim LIKE '%$keyword%' OR
    kode_mk LIKE '%$keyword%' ";
    return query($query);
  }
  function cari1($keyword){
    $query = "SELECT * FROM mahasiswa
    WHERE 
    
    nim LIKE '%$keyword%' OR
    nama_mhs LIKE '%$keyword%' ";
    return query($query);
  }



?>