<?php
//include 'header.php';
$name=$_GET['name'];
$no=$_GET['no'];
if(!isset($no))
{
			die("Plz insert valid case no.");
}

$query = "SELECT * FROM indoorcont WHERE no=".$no;
include 'DbConnect.php';
if($result= mysql_query($query,$conn))
 {}
else
{
				die("Plz insert valid case no.");

}
$row = @mysql_fetch_assoc($result);

$no=$row['no'];
$name=$row['name'];
$date=$row['date'];
$time=$row['time'];
$dnote=$row['dnote'];
$time2=$row['time2'];
$tpr=$row['tpr'];
$comment=$row['comment'];


require("fpdf/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(0,10,"Nitave Hospital",1,0,"L");
$pdf->Cell(-100,10,"Indoor Cont Sheet",1,0,"C");
$pdf->SetFont("Arial","",10);

$pdf->Ln();
$pdf->Cell(0,10,"Case no : {$no}",1,0,"L");
$pdf->Cell(-100,10,"Patient Name : {$name}",1,0,"C");

$pdf->Ln();
$pdf->Cell(0,10,"Date : {$date}",1,0,"L");
$pdf->Cell(-100,10,"Time : {$time}",1,0,"C");

$pdf->Ln();
$pdf->Cell(0,10,"Doctors Notes and Orders : {$dnote}",1,0,"L");
//$pdf->Cell(-100,10,"Present Complaints : {$complents}",1,0,"C");
$pdf->Ln();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(0,10,"Nurse Records",1,0,"L");
$pdf->SetFont("Arial","",10);


$pdf->Ln();
$pdf->Cell(0,10,"Time : {$time2}",1,0,"L");
$pdf->Cell(-100,10,"TPR B.P : {$tpr}",1,0,"C");

$pdf->Ln();
$pdf->Cell(0,10,"Commment : {$comment}",1,0,"L");
$pdf->output();



 ?>