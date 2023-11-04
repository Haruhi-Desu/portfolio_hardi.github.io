<?php
// memanggil library FPDF
require('laporan/fpdf.php');
require 'function.php';
 // intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'DATA KHS',0,0,'C');
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(40,7,'NAMA MAHASISWA',1,0,'C');
$pdf->Cell(30,7,'NAMA MATKUL' ,1,0,'C');
$pdf->Cell(35,7,'TAHUN AKADEMIK' ,1,0,'C');
$pdf->Cell(25,7,'SEMESTER' ,1,0,'C');
$pdf->Cell(25,7,'NILAI',1,0,'C');
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data = mysqli_query($con,"SELECT mahasiswa.nama_mhs, khs.kode_mk, khs.thn_akademik, khs.semester, khs.nilai, matkul.nama_mk FROM mahasiswa, khs, matkul WHERE khs.nim = mahasiswa.nim and matkul.kode_mk = khs.kode_mk");
while($d = mysqli_fetch_array($data)){
  $pdf->Cell(10,6, $no++,1,0,'C');
  $pdf->Cell(40,6, $d['nama_mhs'],1,0);
  $pdf->Cell(30,6, $d['nama_mk'],1,0);
  $pdf->Cell(35,6, $d['thn_akademik'],1,0);
  $pdf->Cell(25,6, $d['semester'],1,0);
  $pdf->Cell(25,6, $d['nilai'],1,1);
}
$pdf->Output();
?>
