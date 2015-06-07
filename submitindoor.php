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
  <script src="js/bootstrap.js">

</script>
  <link rel="stylesheet" href="css/style.css">
  
   </head>


<?php
$billno =$_POST['billno'];
$caseno = $_POST['caseno'];
$name = $_POST['pname'];
$age = $_POST['age'];
$address = $_POST['address'];
 
$d=$_POST['date'];
$datearr = split("/",$d);
$date=$datearr[2]."-".$datearr[0]."-".$datearr[1];
 
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

$query="INSERT INTO indoor(`bno`, `no`, `name`, `age`, `address`, `date`, `dischargedate`, `diagnosis`, `treatement`, `surgeon`, `anasthesiasurgeon`, `delivery`, `anasthesia`, `bdob`, `btime`, `weight`,  `twininfo`, `status`, `asphxia`) VALUES ($billno,$caseno,'$name',$age,'$address','$date','$dischargedate','$diagnosis','$treatement','$surgeon','$anasthesiasurgeon','$delivery','$anasthesia','$dateofbirth','$birthtime',$weight,'$twininfo','$status','$asphxia')";

//$query="INSERT INTO `indoor`(`bno`, `no`, `name`, `age`, `address`, ` date`, `dischargedate`, `diagnosis`, `treatement`, `surgeon`, `anasthesiasurgeon`, `delivery`, `anasthesia`, `bdob`, `btime`, `weight`, `male`, `female`, `twins`, `twininfo`, `status`, `asphxia`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21],[value-22])"

if(@mysql_query($query,$conn))
{
  echo "<h3>Record inserted successfully !</h3>";
}
else{
  echo " Not submitted.";
}

?>            