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

function tambah($data){
	global $con;

	$id = ($_POST['id']);
	$kode_mk = ($_POST['kode_mk']);
	$nama_mk = ($_POST['nama_mk']);
	$kode_dosen = ($_POST['kode_dosen']);
	$sks = ($_POST['sks']);

	$query = "INSERT INTO matkul VALUES ('$id','$kode_mk','$nama_mk','$kode_dosen','$sks')";
mysqli_query($con, $query);
return mysqli_affected_rows($con);
		}


function hapus($id) {
	global $con;
	mysqli_query($con, "DELETE FROM matkul WHERE id = $id");
	return mysqli_affected_rows($con);
}

    
function edit($data) {

    global $con;
    $id =($_POST["id"]);
    $kode_mk = ($_POST["kode_mk"]);
    $nama_mk = ($_POST["nama_mk"]);
    $kode_dosen = ($_POST["kode_dosen"]);
    $sks = ($_POST["sks"]);

    $query = "UPDATE matkul SET
                
                id = '$id',
                kode_mk = '$kode_mk',
                nama_mk = '$nama_mk',
                kode_dosen = '$kode_dosen',
                sks = '$sks'
                WHERE id =$id
             ";
    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
    }

    function cari ($keyword) {

    $query = "SELECT * FROM matkul
    WHERE
    kode_mk LIKE '%$keyword%' OR 
    nama_mk LIKE  '%$keyword%' OR 
    kode_dosen LIKE '%$keyword%'";
    return query ($query) ;

}

 ?>