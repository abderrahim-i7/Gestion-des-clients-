<?php
include "db.php";
require("fpdf186/fpdf.php");


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",14);


$pdf->Cell(0,10,"Liste des clients",0,1,"C");
$pdf->Ln(5);


$pdf->SetFont("Arial","B",10);
$pdf->Cell(10,8,"ID",1);
$pdf->Cell(30,8,"Nom",1);
$pdf->Cell(30,8,"Prenom",1);
$pdf->Cell(20,8,"Sexe",1);
$pdf->Cell(30,8,"Ville",1);
$pdf->Cell(40,8,"Loisirs",1);
$pdf->Ln();


$pdf->SetFont("Arial","",10);
$result = mysqli_query($conn,"SELECT * FROM clients");

while($row = mysqli_fetch_assoc($result)){
    $pdf->Cell(10,8,$row['id'],1);
    $pdf->Cell(30,8,$row['nom'],1);
    $pdf->Cell(30,8,$row['prenom'],1);
    $pdf->Cell(20,8,$row['sexe'],1);
    $pdf->Cell(30,8,$row['ville'],1);
    $pdf->Cell(40,8,$row['loisirs'],1);
    $pdf->Ln();
}


$pdf->Output();
?>
