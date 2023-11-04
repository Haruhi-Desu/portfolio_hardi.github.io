<?php
// memanggil library FPDF
require('laporan/fpdf.php');
require 'function.php';
 // intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'DATA JADWAL',0,0,'C');
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(25,7,'KODE MAKUL',1,0,'C');
$pdf->Cell(40,7,'NAMA MAKUL' ,1,0,'C');
$pdf->Cell(25,7,'JAM' ,1,0,'C');
$pdf->Cell(25,7,'SKS' ,1,0,'C');
$pdf->Cell(40,7,'KODE DOSEN',1,0,'C');
$pdf->Cell(25,7,'NIM' ,1,0,'C');
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data = mysqli_query($con,"SELECT  jadwal.kode_mk, jadwal.nama_mk, jadwal.jam, jadwal.jumlah_sks, jadwal.nim , dosen.nama_dosen, mahasiswa.nama_mhs  FROM jadwal, dosen, mahasiswa WHERE jadwal.kode_dosen = dosen.kode_dosen and mahasiswa.nim = jadwal.nim");
while($d = mysqli_fetch_array($data)){
  $pdf->Cell(10,6, $no++,1,0,'C');
  $pdf->Cell(25,6, $d['kode_mk'],1,0);
  $pdf->Cell(40,6, $d['nama_mk'],1,0);
  $pdf->Cell(25,6, $d['jam'],1,0);
  $pdf->Cell(25,6, $d['jumlah_sks'],1,0);
  $pdf->Cell(40,6, $d['nama_dosen'],1,0);
  $pdf->Cell(25,6, $d['nama_mhs'],1,1);
}
$pdf->Output();
?>
