<?php
require('fpd/fpdf.php');

require '../models/dbconnexion.php';
//$id_livre = $_GET['id'];
$sql = "SELECT * FROM table_facture WHERE id_facture= 1";
$req=$pdo->query($sql);
$facture=$req->fetch();

$date =$facture['date_paiement'];
// Instanciation of inherited class
$date = date('d.m.y');
$pdf = new FPDF('L','mm','A5');
$pdf->AddPage();
$pdf->Image('image/fridib.png',10,6,30);
// Arial bold 15
$pdf->SetFont('Arial','',10);
$pdf->Cell(184,4,utf8_decode('N° '.$facture['id_facture'].'/2023'),0,0,'R');
$pdf->Ln(26,10);

$pdf->SetFont('Arial','B',15);
// Move to the right
$pdf->Cell(80);
// Title
$pdf->Cell(28,0,utf8_decode('Université Adventiste de Lukanga'),0,0,'C');
$pdf->Ln(8,10);
$pdf->SetFont('Arial','',12);
$pdf->Cell(198,0,utf8_decode('Foyer de Recherche interdisciplinaire pour le développement integré (FRIDI-UNILUK)'),0,0,'C');
$pdf->Ln(8,20);
$pdf->SetFont('Arial','',12);
$pdf->Cell(187,0,utf8_decode('BON DE RECEPTION DE FONDS'),0,0,'C');
// Line break
$pdf->Ln(15,20);
$pdf->Cell(189,0,utf8_decode('Reçu de Mme/Mr '.$facture['nom_auteur']),0,0,'C');
$pdf->Ln(8,20);
$pdf->Cell(189,0,utf8_decode('Montant payé : '. $facture['montant_paye'].'USD'),0,0,'C');
$pdf->Ln(8,20);
$pdf->Cell(189,0,utf8_decode('Motif de paiement : '.$facture['motif_paiement']),0,0,'C');
$pdf->Ln(12,10);

$pdf->Cell(18,4,utf8_decode('Date du jour'),0,0,'L');
$pdf->Cell(170,4,utf8_decode('Signature de la caisse du FRIDI'),0,0,'R');
$pdf->Ln(6,6);
$pdf->Cell(10,4,$date,0,0,'L');
$pdf->Output();
?>