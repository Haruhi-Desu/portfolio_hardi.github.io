<?php
	require 'function.php';

	$id = $_GET["id"] ;
	if (hapus($id) > 0 ) {
		// code...
		echo " 
		<script>
				alert('Data Berhasil Di Hapus!');
				document.location.href = 'tampilan.php';
				</script>
				";
			} else {
				echo " 
				<script> 
						alert('Data gagal Di Hapus!');
						document.location.href = 'tampilan.php';
						</script>";
			}
?>