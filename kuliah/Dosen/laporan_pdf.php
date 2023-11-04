<?php
// memanggil library FPDF
require('laporan/fpdf.php');
require 'function.php';
 // intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Times','B',13);
$pdf->Cell(300,10,'DATA DOSEN',0,0,'C');
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(20,7,'NO',1,0,'C');
$pdf->Cell(50,7,'Kode Dosen',1,0,'C');
$pdf->Cell(70,7,'NAMA' ,1,0,'C');
$pdf->Cell(55,7,'Alamat',1,0,'C');
$pdf->Cell(65,7,'No Telpone',1,0,'C');
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data = mysqli_query($con,"SELECT  * FROM dosen");
while($d = mysqli_fetch_array($data)){
  $pdf->Cell(20,6, $no++,1,0,'C');
  $pdf->Cell(50,6, $d['kode_dosen'],1,0);
  $pdf->Cell(70,6, $d['nama_dosen'],1,0);  
  $pdf->Cell(55,6, $d['alamat'],1,0);
  $pdf->Cell(65,6, $d['no_hp'],1,1);
}
$pdf->Output();
?>
