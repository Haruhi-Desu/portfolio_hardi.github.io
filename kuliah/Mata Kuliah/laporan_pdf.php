<?php
// memanggil library FPDF
require('laporan/fpdf.php');
require 'function.php';
 // intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Times','B',13);
$pdf->Cell(250,10,'DATA MATA KULIAH',0,0,'C');
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(55,7,'KODE MATKUL' ,1,0,'C');
$pdf->Cell(55,7,'NAMA MATKUL' ,1,0,'C');
$pdf->Cell(65,7,'KODE DOSEN',1,0,'C');
$pdf->Cell(35,7,'SKS',1,0,'C');

 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data = mysqli_query($con,"SELECT matkul.kode_mk, matkul.nama_mk, dosen.nama_dosen, matkul.sks FROM matkul,dosen WHERE matkul.kode_dosen=dosen.kode_dosen");
while($d = mysqli_fetch_array($data)){
  $pdf->Cell(10,6, $no++,1,0,'C');
  $pdf->Cell(55,6, $d['kode_mk'],1,0);
  $pdf->Cell(55,6, $d['nama_mk'],1,0);
  $pdf->Cell(65,6, $d['nama_dosen'],1,0);
  $pdf->Cell(35,6, $d['sks'],1,1);

}
$pdf->Output();
?>
