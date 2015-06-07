<?php
//include 'header.php';
//$name=$_POST['name'];
//$no=$_POST['no'];
$rid=$_POST['rid'];
if(!isset($rid))
{
	die("Plz insert valid registration number.");
}
$query = "SELECT * FROM receptionistreg WHERE rid=".$rid;
include 'DbConnect.php';
if($result= mysql_query($query,$conn))
 {}
	else
	{ 
		die("Plz Insert Valid Case No.");
	}
$row = @mysql_fetch_assoc($result);

$name=$row['name'];
$rid=$row['rid'];
$age=$row['age'];
$gender=$row['gender'];
$ddob=$row['ddob'];
$address=$row['address'];
$bgroup=$row['bgroup'];
$occupation=$row['occupation'];
$uname=$row['uname'];
$pass=$row['pass'];
$email=$row['email'];
$phone=$row['phone'];


require("fpdf/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(0,10,"Nitave Hospital",1,0,"L");
$pdf->Cell(-100,10,"Receptionist Registration",1,0,"C");
$pdf->SetFont("Arial","",10);

$pdf->Ln();
$pdf->Cell(0,10,"Name : {$name}",1,0,"L");
$pdf->Cell(-100,10,"Receptionist Id : {$rid}",1,0,"C");

$pdf->Ln();
$pdf->Cell(0,10,"Age : {$age}",1,0,"L");
$pdf->Cell(-100,10,"Gender : {$gender}",1,0,"C");

$pdf->Ln();
$pdf->Cell(0,10,"Date Of Birth : {$ddob}",1,0,"L");

$pdf->Ln();
$pdf->Cell(0,10,"Address : {$address}",1,0,"L");
$pdf->Cell(-100,10,"Blood Group : {$bgroup}",1,0,"C");

$pdf->Ln();
$pdf->Cell(0,10,"Occupation : {$occupation}",1,0,"L");
$pdf->Ln();
$pdf->Cell(0,10,"User Name : {$uname}",1,0,"L");

$pdf->Ln();
$pdf->Cell(0,10,"Password : {$pass}",1,0,"L");

$pdf->Ln();
$pdf->Cell(0,10,"Email Id : {$email}",1,0,"L");

$pdf->Ln();
$pdf->Cell(0,10,"Phone No : {$phone}",1,0,"L");
$pdf->output();



 ?> 