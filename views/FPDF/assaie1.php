<?php
require('fpd/fpdf.php');

require '../models/dbconnexion.php';
//$id_livre = $_GET['id'];
// $sql = "SELECT * FROM table_livre WHERE id= 18";
// $req=$pdo->query($sql);
// $facture=$req->fetch();
$read =$pdo->query("SELECT * from table_livre where is_published=true ORDER BY id DESC LIMIT 0, 5 ");
$i = 1;
while($student=$read->fetch()){

    $date =$student['laDate'];
    // Instanciation of inherited class
    $date = date('d.m.y');
    $pdf = new FPDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->Image('image/fridib.png',10,6,30);
    // Arial bold 15


    $pdf->SetFont('Arial','B',15);
    // Move to the right
    $pdf->Cell(80);
    // Title
    $pdf->Cell(28,0,utf8_decode('FRIDI-UNILUK(Cahier du Fridi)'),0,0,'C');
    $pdf->Ln(20,10);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(28,0,utf8_decode('N° '.$student['id']),0,0,'L');
    $pdf->Ln(10,10);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(187,0,utf8_decode('Noms : '.$student['first_name'].' '.$student['last_name']),0,0,'L');
    $pdf->Ln(8,20);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(187,0,utf8_decode('Titre du document : '.$student['titre'].' '.$student['domaine']),0,0,'L');
    $pdf->Ln(8,20);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(187,0,utf8_decode('Domaine de travail : '.$student['domaine']),0,0,'L');
    $pdf->Ln(8,20);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(187,0,utf8_decode('Date de publication : '.$student['laDate']),0,0,'L');
    $pdf->Ln(8,20);
    $i++;
}
$pdf->Output();

?>