<?php
include "header.php";
//include "authenticate.php";
include 'DbConnect.php';
?>


<head>
  <meta charset="utf-8">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="css/yash.css">
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <link rel="stylesheet" href="css/style.css">
  
   </head>


<?php
$billno =$_POST['billno'];
$caseno = $_POST['caseno'];
$patientname = $_POST['patientname'];
$age = $_POST['age'];
$address = $_POST['address'];
$admitdate = $_POST['admitdate'];
$dischargedate = $_POST['dischargedate'];
$diagnosis = $_POST['diagnosis'];
$treatement = $_POST['treatment'];
$surgeon = $_POST['surgeon'];
$anasthesiasurgeon = $_POST['anasthesiasurgeon'];
$delivery = $_POST['delivery'];
$anasthesia = $_POST['anasthesia'];
$dateofbirth = $_POST['dateofbirth'];
$birthtime = $_POST['birthtime'];
$weight = $_POST['weight']; 


if(!isset($_POST['twins']))
{

	$twins = 0;
	$twininfo = "nil";
}
else
{

	 $twins = 1;
	 echo $twininfo = $_POST['twininfo'];

}

if(!isset($_POST['male']))
	$male = 0;
else
	$male = 1;
if(!isset($_POST['female']))
	$female = 0;
else
	$female = 1;
 
$status = $_POST['status'];
$asphxia = $_POST['it'];

$query="INSERT INTO indoor(`bno`, `no`, `name`, `age`, `address`, `admitdate`, `dischargedate`, `diagnosis`, `treatement`, `surgeon`, `anasthesiasurgeon`, `delivery`, `anasthesia`, `bdob`, `btime`, `weight`,  `twininfo`, `status`, `asphxia`) VALUES ($billno,$caseno,'$patientname',$age,'$address','$admitdate','$dischargedate','$diagnosis','$treatement','$surgeon','$anasthesiasurgeon','$delivery','$anasthesia','$dateofbirth','$birthtime',$weight,'$twininfo','$status','$asphxia')";

if(mysql_query($query,$conn))
{
  echo "Record inserted successfully....";
}
else{
  echo " Not submitted.";
}

?>            