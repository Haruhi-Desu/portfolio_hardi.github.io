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

	$kode_dosen = ($_POST['kode_dosen']);
	$nama_dosen = ($_POST['nama_dosen']);
	$alamat = ($_POST['alamat']);
	$no_hp = ($_POST['no_hp']);
	$foto = upload();
		if (!$foto) {
			return false;
		}

	$query = "INSERT INTO dosen VALUES ('$kode_dosen','$nama_dosen','$alamat','$no_hp','$foto')";
mysqli_query($con, $query);
return mysqli_affected_rows($con);

}
function hapus($id) {
	global $con;
	mysqli_query($con, "DELETE FROM dosen WHERE kode_dosen = $id");
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
                alert('Ukuran foto terlalu besar!');
                </script>";

            return false;
        }

        move_uploaded_file($tmpname, '../img/' . $namafile);

        return $namafile;
    }
    function edit($data) {

    global $con;
    
    $kode_dosen = htmlspecialchars($_POST["kode_dosen"]);
    $nama_dosen = htmlspecialchars($_POST["nama_dosen"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $no_hp = htmlspecialchars($_POST["no_hp"]);
    $gambarLama = htmlspecialchars($_POST["gambarLama"]);

    // apakah gambar di ubah
    if($_FILES['foto']['error'] === 4) {
        $foto = $gambarLama;
    } else {
        $foto = upload();
    }

    $query = "UPDATE dosen SET
                
                kode_dosen = '$kode_dosen',
                nama_dosen = '$nama_dosen',
                alamat = '$alamat',
                no_hp = '$no_hp',
                foto = '$foto'
                WHERE kode_dosen =$kode_dosen
             ";
    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
    }

    function cari ($keyword) {

    $query = "SELECT * FROM dosen
    WHERE
    kode_dosen LIKE '%$keyword%' OR 
    nama_dosen LIKE  '%$keyword%' OR 
    alamat LIKE '%$keyword%'";
    return query ($query) ;

}

    

 ?>