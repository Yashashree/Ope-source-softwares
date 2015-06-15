<?php
//include 'header.php';
$name=$_GET['name'];
$no=$_GET['no'];
//$no=1;
if(!isset($no))
{
			die("Plz insert valid case no.");
}
 $query = "SELECT * FROM opd WHERE no=".$no;
include 'DbConnect.php';

if($result= mysql_query($query,$conn))
{
     "retrived";
}
else
{
		die("Plz insert valid case no.");
}

$row=mysql_fetch_assoc($result);

$no=$row['no'];
$date=$row['date'];
$name=$row['name'];
$age=$row['age'];
$address=$row['address'];
$complents=$row['complents'];
$pmc=$row['pmc'];
$prmc=$row['prmc'];
$lmp=$row['lmp'];
$oh=$row['oh'];
$pastho=$row['pastho'];
//cho $dmother=$row['dmother'];

$dfather=$row['dfather'];
$dsiblings=$row['dsiblings'];
$dgrandparent=$row['dgrandparent'];
$dnil=$row['dnil'];
$hmother=$row['hmother'];
$hfather=$row['hfather'];
$hsiblings=$row['hsiblings'];
$hgrandparent=$row['hgrandparent'];
$hnil=$row['hnil'];
$marriage=$row['marriage'];
$firstd=$row['firstd'];
$secondd=$row['secondd'];
$thirdd=$row['thirdd'];
$pet=$row['pet'];
$personal_ho=$row['personal_ho'];
$clinical=$row['clinical'];
$hb=$row['hb'];
$cbc=$row['cbc'];
$bldgroup=$row['bldgroup'];
$hbsag=$row['hbsag'];
$hiv=$row['hiv'];
$first=$row['first'];
$second=$row['second'];
$lmp2=$row['lmp2'];
$edd=$row['edd'];





if(!isset($dmother))
{
    $dmother = "True";
     
}
else
{
    $dmother = "False";
     
}
//echo $dmother;


if(!isset($dfather))
{
    $dfather = "True";
     
}
else
{
    $dfather = "False";
     
}


if(!isset($dsiblings))
{
    $dsiblings = "True";
     
}
else
{
    $dsiblings = "False";
     
}


if(!isset($dgrandparent))
{
    $dgrandparent = "True";
     
}
else
{
    $dgrandparent = "False";
     
}


if(!isset($dnil))
{
    $dnil = "True";
     
}
else
{
    $dnil = "False";
     
}


if(!isset($hmother))
{
    $hmother = "True";
     
}
else
{
    $hmother = "False";
     
}
//echo $dmother;


if(!isset($hfather))
{
    $hfather = "True";
     
}
else
{
    $hfather = "False";
     
}


if(!isset($hsiblings))
{
    $hsiblings = "True";
     
}
else
{
    $hsiblings = "False";
     
}


if(!isset($hgrandparent))
{
    $hgrandparent = "True";
     
}
else
{
    $hgrandparent = "False";
     
}


if(!isset($hnil))
{
    $hnil = "True";
     
}
else
{
    $hnil = "False";
     
}


if(!isset($firstd))
{
    $firstd = "True";
     
}
else
{
    $firstd = "False";
     
}


if(!isset($secondd))
{
    $secondd = "True";
     
}
else
{
    $secondd = "False";
     
}


if(!isset($thirdd))
{
    $thirdd = "True";
     
}
else
{
    $thirdd = "False";
     
}

if(!isset($marriage))
{
    $marriage = "Consanguineous";
     
}
else
{
    $marriage = "Non Consanguineous";
     
}


if(!strcmp($marriage,"Consanguineous"))
{
    $firstd="Nil";
    $secondd="Nil";
    $thirdd="Nil";
}
// PDF generation

require("fpdf/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(0,10,"Nitave Hospital",1,0,"L");
$pdf->Cell(-100,10,"OPD Case Paper",1,0,"C");
$pdf->SetFont("Arial","",10);

$pdf->Ln();
$pdf->Cell(0,10,"Case no : {$no}",1,0,"L");
$pdf->Cell(-100,10,"Date : {$date}",1,0,"C");

$pdf->Ln();
$pdf->Cell(0,10,"Name : {$name}",1,0,"L");
$pdf->Cell(-100,10,"Age : {$age}",1,0,"C");

$pdf->Ln();
$pdf->Cell(0,10,"Address : {$address}",1,0,"L");
$pdf->Cell(-100,10,"Present Complaints : {$complents}",1,0,"C");

$pdf->Ln();
$pdf->Cell(0,10,"PMC : {$pmc}",1,0,"L");
$pdf->Cell(-100,10,"Pr Mc : {$prmc}",1,0,"C");

$pdf->Ln();
$pdf->Cell(0,10,"LMP : {$lmp}",1,0,"L");
$pdf->Cell(-100,10,"OH : {$oh}",1,0,"C");

$pdf->Ln();
$pdf->Cell(0,10,"Past OH : {$pastho}",1,0,"L");

$pdf->Ln();
$pdf->Cell(0,10,"Family H/O : Mother = {$dmother}  Father = {$dfather} Siblings = {$dsiblings} Grandparents = {$dgrandparent} Nil = {$dnil}",1,0,"L");

$pdf->Ln();
$pdf->Cell(0,10,"Hypertension : Mother = {$hmother}  Father = {$hfather} Siblings = {$hsiblings} Grandparents = {$hgrandparent} Nil = {$hnil}",1,0,"L");


$pdf->Ln();
$pdf->Cell(0,10,"Hypertension : Mother = {$hmother}  Father = {$hfather} Siblings = {$hsiblings} Grandparents = {$hgrandparent} Nil = {$hnil}",1,0,"L");

$pdf->Ln();
$pdf->Cell(0,10,"Marriage :   {$marriage}  1 st Degree = {$firstd} 2 nd Degree = {$secondd} 3 rd Degree = {$thirdd}",1,0,"L");

$pdf->Ln();
$pdf->Cell(0,10,"Pets :   {$pet} ",1,0,"L");
 

$pdf->Ln();
$pdf->Cell(0,10,"Personal H/O :   {$personal_ho} ",1,0,"L");
 

$pdf->Ln();
$pdf->Cell(0,10,"Clinical :   {$clinical} ",1,0,"L");

 
$pdf->Ln();
$pdf->Cell(0,10,"HB : {$hb}",1,0,"L");
$pdf->Cell(-100,10,"CBC: {$cbc}",1,0,"C");


$pdf->Ln();
$pdf->Cell(0,10,"Blood Group : {$bldgroup}",1,0,"L");
$pdf->Cell(-100,10,"HBs Ag : {$hbsag}",1,0,"C");

if(isset($first))
  $first="True";
else
  $first="False";

if(isset($second))
  $second="True";
else
  $second="False";

$pdf->Ln();
$pdf->Cell(0,10,"HIV : {$hiv}",1,0,"L");
$pdf->Cell(-100,10,"Inj TT : First: {$first} Second :{$second}",1,0,"C");


$pdf->Ln();
$pdf->Cell(0,10,"LMP : {$lmp2}",1,0,"L");
$pdf->Cell(-100,10,"EDD : {$edd}",1,0,"C");
$pdf->output();



 ?>