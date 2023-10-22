<?php
require('fpd/fpdf.php');

$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','b',16);
$pdf->Cell(40,10,'Hello World !');
$pdf->SetFont('Courier','i',50);
$pdf->Ln();
$pdf->Cell(60,10,'Powered by FPDF.',0,1);
$pdf->Output();
?>