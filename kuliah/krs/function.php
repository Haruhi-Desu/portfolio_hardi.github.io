<?php 

$con = mysqli_connect("localhost","root" ,"","kuliah");


function query ($query){
	global $con;

	$result = mysqli_query($con,$query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		
		$rows[] = $row;

	}
	return $rows;
}

function tambah($data){
	global $con;

    $id = ($_POST['id']);
	$nama_mhs = ($_POST['nama_mhs']);
    $kode_mk = ($_POST['kode_mk']);
	$jam = ($_POST['jam']);
	$jumlah_sks = ($_POST['jumlah_sks']);
	$kode_dosen = ($_POST['kode_dosen']);
	$nim = ($_POST['nim']);

	$query = "INSERT INTO jadwal VALUES ('$id','$kode_mk','$nama_mk','$jam','$jumlah_sks','$kode_dosen','$nim')";
mysqli_query($con, $query);
return mysqli_affected_rows($con);

}
function hapus($id) {
	global $con;
	mysqli_query($con, "DELETE FROM jadwal WHERE id = $id");
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
    $id = ($_POST['id']);
    $kode_mk = ($_POST['kode_mk']);
	$nama_mk = ($_POST['nama_mk']);
	$jam = ($_POST['jam']);
	$jumlah_sks = ($_POST['jumlah_sks']);
	$kode_dosen = ($_POST['kode_dosen']);
	$nim = ($_POST['nim']);

    $query = "UPDATE jadwal SET
                
                id = '$id',
                kode_mk = '$kode_mk',
                nama_mk = '$nama_mk',
                jam = '$jam',
                jumlah_sks = '$jumlah_sks',
                kode_dosen = '$kode_dosen',
                nim = '$nim'
                WHERE kode_mk =$kode_mk
             ";
    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
    }

    function cari ($keyword) {

    $query = "SELECT * FROM jadwal
    WHERE
    kode_mk LIKE '%$keyword%' OR 
    nama_mk LIKE  '%$keyword%' OR 
    kode_dosen LIKE '%$keyword%'";
    return query ($query) ;

}

    

 ?>