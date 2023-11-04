<?php 

$con = mysqli_connect("localhost","root" ,"","kuliah");


function query ($query){
	global $con;

	$result = mysqli_query($con,$query);
	$rows = [];
	while ($row = mysqli_fetch_assoc ($result)) {
		
		$rows[] = $row;

	}
	return $rows;
}

function tambah ($data){
	global $con;

	$nim = ($_POST['nim']);
	$nama_mhs = ($_POST['nama_mhs']);
	$tgl_lahir = ($_POST['tgl_lahir']);
	$alamat = ($_POST['alamat']);
	$no_tp = ($_POST['no_tp']);
	$foto = upload();
		if (!$foto) {
			return false;
		}

	$query = "INSERT INTO mahasiswa VALUES ('$nim','$nama_mhs','$tgl_lahir','$alamat','$no_tp','$foto')";
mysqli_query($con, $query);
return mysqli_affected_rows($con);

}
function hapus($id) {
	global $con;
	mysqli_query($con, "DELETE FROM mahasiswa WHERE nim = $id");
	return mysqli_affected_rows($con);
}

function upload(){

    $namafile = $_FILES['foto']['name'];
    $ukuranfile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpname = $_FILES['foto']['tmp_name'];

    //cek apakah tidak ada foto yg diupload
    if ($error === 4) {
        echo "<script>
            alert('Pilih Foto terlebih dahulu!');
            </script>";

        return false;
    }

        //gambar atau bukan
    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.', $namafile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>
                alert('Bukan Foto!');
                </script>";

            return false;
        }

        //pembatas ukuran foto (byte)
        if ($ukuranfile > 1000000) {
            echo "<script>
                alert('Kegedean!');
                </script>";

            return false;
        }

        move_uploaded_file($tmpname, '../img/' . $namafile);

        return $namafile;
    }
    function edit($data) {

        global $con;
        $id = ($_GET["id"]);
        $nama_mhs = htmlspecialchars($_POST["nama_mhs"]);
        $tgl_lahir = htmlspecialchars($_POST["tgl_lahir"]);
        $alamat = htmlspecialchars($_POST["alamat"]);
        $no_telp = htmlspecialchars($_POST["no_telp"]);
        $gambarLama = htmlspecialchars($_POST["gambarLama"]);

    // apakah gambar di ubah
    if($_FILES['foto']['error'] === 4) {
        $foto = $gambarLama;
    } else {
        $foto = upload();
    }
    
        $query = "UPDATE mahasiswa SET
                    nama_mhs = '$nama_mhs',
                    tgl_lahir = '$tgl_lahir',
                    alamat = '$alamat',
                    no_telp = '$no_telp',
                    foto = '$foto'
                    WHERE nim =$id
                 ";
        mysqli_query($con, $query);
    
        return mysqli_affected_rows($con);
        }

     function cari ($keyword) {

    $query = "SELECT * FROM mahasiswa
    WHERE
    nim LIKE '%$keyword%' OR 
    nama_mhs LIKE  '%$keyword%'";
    return query ($query) ;

}

 ?>