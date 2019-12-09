<?php
include("db.php");
include "auth.php";
$nama = $_SESSION['username'];

require('pdf/fpdf.php');

$pdf = new FPDF("P","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',15);
$pdf->Image('logo.png',1,1,1.6,2);
$pdf->SetX(4);            
$pdf->MultiCell(13.5,0.5,'DINAS PERTANIAN KABUPATEN PANDEGLANG',0,'C');
$pdf->SetX(4);
$pdf->SetFont('Times','B',10);
$pdf->MultiCell(13.5,0.5,'Telpon : 0038XXXXXXX',0,'C');    
$pdf->SetX(4);
$pdf->MultiCell(13.5,0.5,'JL. Pandeglang Banten',0,'C');
$pdf->SetX(4);
$pdf->MultiCell(13.5,0.5,'website : www.petanihebat.com',0,'C');
$pdf->Line(1,3.1,20.53,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,20.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Times','B',12);
$pdf->Cell(17.5,0.7,"DATA GAPOKTAN KABUPATEN PANDEGLANG",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Times','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Times','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Nama', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'Gapoktan', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Pendirian', 1, 0, 'C');
$pdf->Cell(5, 0.8, 'Alamat', 1, 0, 'C');
$pdf->SetFont('Times','',10);

$sql=mysqli_query($bd,"select * from user ");
while($data=mysqli_fetch_array($sql))
{
$no=1;
	$pdf->ln(0.80);
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(4, 0.8, $data['nama'], 1, 0,'L');
	$pdf->Cell(6, 0.8, $data['gapoktan'], 1, 0,'L');
	$pdf->Cell(2, 0.8, $data['tahun_berdiri'], 1, 0,'C');
	$pdf->Cell(5, 0.8, $data['alamat'], 1, 0,'L');
	$no++;
				}

$pdf->Output("laporan_buku.pdf","I");

?>

