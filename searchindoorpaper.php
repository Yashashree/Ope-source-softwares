<?php
//include 'header.php';
$name=$_GET['name'];
$no=$_GET['no'];
if(!isset($no))
{
			die("Plz insert valid case no.");
}

$query = "SELECT * FROM indoor WHERE no=".$no;
include 'DbConnect.php';
if($result= mysql_query($query,$conn))
{}
else
{
				die("Plz insert valid case no.");

}
$row = @mysql_fetch_assoc($result);

$bno=$row['bno'];
$no=$row['no'];
$name=$row['name'];
$age=$row['age'];
$address=$row['address'];
$admitdate=$row['date'];
$dischargedate=$row['dischargedate'];
$diagnosis=$row['diagnosis'];
$treatement=$row['treatement'];
$surgeon=$row['surgeon'];
$anasthesiasurgeon=$row['anasthesiasurgeon'];

$delivery=$row['delivery'];
$anasthesia=$row['anasthesia'];
$bdob=$row['bdob'];
$btime=$row['btime'];
$weight=$row['weight'];
$male=$row['male'];
$female=$row['female'];
$twins=$row['twins'];
$twininfo=$row['twininfo'];
$status=$row['status'];
$asphxia=$row['asphxia'];




if(!isset($male))
{
    $male = "True";
     
}
else
{
    $male = "False";
     
}
//echo $dmother;


if(!isset($female))
{
    $female = "True";
     
}
else
{
    $female = "False";
     
}


if(!isset($twins))
{
    $twins = "True";
     
}
else
{
    $twins = "False";
     
}


require("fpdf/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(0,10,"Nitave Hospital",1,0,"L");
$pdf->Cell(-100,10,"Indoor Case Paper",1,0,"C");
$pdf->SetFont("Arial","",10);

$pdf->Ln();
$pdf->Cell(0,10,"Bill no : {$bno}",1,0,"L");
$pdf->Cell(-100,10,"Case No : {$no}",1,0,"C");

$pdf->Ln();
$pdf->Cell(0,10,"Name : {$name}",1,0,"L");
$pdf->Cell(-100,10,"Age : {$age}",1,0,"C");

$pdf->Ln();
$pdf->Cell(0,10,"Address : {$address}",1,0,"L");
//$pdf->Cell(-100,10,"Present Complaints : {$complents}",1,0,"C");

$pdf->Ln();
$pdf->Cell(0,10,"Date of Admission : {$admitdate}",1,0,"L");
$pdf->Cell(-100,10,"Date of discharge : {$dischargedate}",1,0,"C");

$pdf->Ln();
$pdf->Cell(0,10,"Diagnosis : {$diagnosis}",1,0,"L");
$pdf->Ln();
$pdf->Cell(0,10,"Treatment : {$treatement}",1,0,"L");

$pdf->Ln();
$pdf->Cell(0,10,"Surgeon Name : {$surgeon}",1,0,"L");
$pdf->Cell(-100,10,"Anasthesia Surgeon : {$anasthesiasurgeon}",1,0,"C");


$pdf->Ln();
$pdf->Cell(0,10,"Delivery : {$delivery}",1,0,"L");
$pdf->Cell(-100,10,"Anasthesia : {$anasthesia}",1,0,"C");

$pdf->Ln();
$pdf->SetFont("Arial","B",12);
$pdf->Cell(0,10,"Baby's Information",1,0,"L");

$pdf->SetFont("Arial","",10);

$pdf->Ln();
$pdf->Cell(0,10,"Date Of Birth : {$bdob}",1,0,"L");
$pdf->Cell(-100,10,"Birth Time : {$btime}",1,0,"C");

$pdf->Ln();
$pdf->Cell(0,10,"Weight : {$weight}",1,0,"L");


$pdf->Ln();
$pdf->Cell(0,10,"Gender : Male = {$male}  Female = {$female} Twins = {$twins}",1,0,"L");

$pdf->Ln();
$pdf->Cell(0,10,"Status : {$status}",1,0,"L");
$pdf->Cell(-100,10,"Asphxia : {$asphxia}",1,0,"C");
 


$pdf->output();



 ?>