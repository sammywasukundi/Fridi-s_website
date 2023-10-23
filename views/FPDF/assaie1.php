<?php
require('fpd/fpdf.php');

require '../models/dbconnexion.php';


class PDF extends FPDF
{
    // En-tête
    function Header()
    {
        $this->SetFont('Arial','B',8);
        
        $this->Cell(0,10,utf8_decode('FRIDI-UNILUK(Cahier du Fridi)'),0,1,'C');
        
        // Saut de ligne
        $this->Ln(10);
    }
}

$pdf = new PDF();
$pdf->AddPage();

$sql = "SELECT * from table_livre";
$result = $pdo->query($sql);

 	 	
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $pdf->Cell(20,10,$row['first_name'].' '.$row['last_name'],1,0,'L');
    $pdf->Cell(20,10,$row['coauteurs'],1,0);
    $pdf->Cell(14,10,$row['type'],1,0);
    $pdf->Cell(20,10,$row['titre'],1,0);
    // $pdf->Cell(10,10,$row['domaine'],1,0);
    // $pdf->Cell(10,10,$row['laDate'],1,0);
}


$pdf->Output();
// $read =$pdo->query("SELECT * from table_livre where is_published=true ORDER BY id DESC LIMIT 0, 5 ");
// $i = 1;
// while($student=$read->fetch()){

//     $date =$student['laDate'];
//     // Instanciation of inherited class
//     $date = date('d.m.y');
//     $pdf = new FPDF('P','mm','A4');
//     $pdf->AddPage();
//     $pdf->Image('image/fridib.png',10,6,30);
//     // Arial bold 15


//     $pdf->SetFont('Arial','B',15);
//     // Move to the right
//     $pdf->Cell(80);
//     // Title
//     $pdf->Cell(28,0,utf8_decode('FRIDI-UNILUK(Cahier du Fridi)'),0,0,'C');
//     $pdf->Ln(20,10);
//     $pdf->SetFont('Arial','',10);
//     $pdf->Cell(28,0,utf8_decode('N° '.$student['id']),0,0,'L');
//     $pdf->Ln(10,10);
//     $pdf->SetFont('Arial','',12);
//     $pdf->Cell(187,0,utf8_decode('Noms : '.$student['first_name'].' '.$student['last_name']),0,0,'L');
//     $pdf->Ln(8,20);
//     $pdf->SetFont('Arial','',12);
//     $pdf->Cell(187,0,utf8_decode('Titre du document : '.$student['titre'].' '.$student['domaine']),0,0,'L');
//     $pdf->Ln(8,20);
//     $pdf->SetFont('Arial','',12);
//     $pdf->Cell(187,0,utf8_decode('Domaine de travail : '.$student['domaine']),0,0,'L');
//     $pdf->Ln(8,20);
//     $pdf->SetFont('Arial','',12);
//     $pdf->Cell(187,0,utf8_decode('Date de publication : '.$student['laDate']),0,0,'L');
//     $pdf->Ln(8,20);
//     $i++;
// }
// $pdf->Output();

?>