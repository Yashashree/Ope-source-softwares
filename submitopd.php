<?php
include "header.php";
include "authenticate.php";
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
  
$p_name=$_POST['p_name'];
$d=$_POST['date'];
$datearr = split("/",$d);
$date=$datearr[2]."-".$datearr[1]."-".$datearr[0];


$age=$_POST['age'];
$address=$_POST['address'];
$present_comp=$_POST['present_comp'];
$pmc=$_POST['pmc'];
$prmc=$_POST['pmrc'];
$lmp=$_POST['lmp'];
$oh=$_POST['oh'];
$past_ho=$_POST['past_ho'];

if(!isset($_POST['motherd']))
$motherd = 0;
else
$motherd = 1;

if(!isset($_POST['fatherd']))
$fatherd = 0;
else
$fatherd = 1;

if(!isset($_POST['siblingsd']))
$siblingsd = 0;
else
$siblingsd = 1;

if(!isset($_POST['grandparentsd']))
$grandparentsd = 0;
else
$grandparentsd = 1;

if(!isset($nild))
$nild = 0;
else
$nild = 1;


if(!isset($_POST['motherh']))
$motherh = 0;
else
$motherh = 1;

if(!isset($_POST['fatherh']))
$fatherh = 0;
else
$fatherh = 1;

if(!isset($_POST['siblingsh']))
$siblingsh = 0;
else
$siblingsh = 1;

if(!isset($_POST['grandparentsh']))
$grandparentsh = 0;
else
$grandparentsh = 1;

if(!isset($nilh))
$nilh = 0;
else
$nild = 1;


if(!isset($_POST['marriage']))

$marriage = 0;
else
$marriage=1;

if(!isset($_POST['firstd']))
$firstd = 0;
else
$firstd = 1;
 
if(!isset($_POST['secondd']))
$secondd = 0;
else
$secondd = 1;
 
if(!isset($_POST['thirdd']))
$thirdd = 0;
else
$thirdd = 1;
  
$pets = $_POST['pets'];
$personal_ho=$_POST['personal_ho'];
$Clinical=$_POST['Clinical'];
$HB=$_POST['HB'];
$CBC=$_POST['CBC'];
$BLGR=$_POST['bgroup'];
$HBs=$_POST['HBs'];
$HIV=$_POST['HIV'];

if(!isset($_POST['first']))
	$first = 0;
else
	$first = 1;

if(!isset($_POST['second']))
	$second = 0;
else
	$second = 1;


$LMP=$_POST['LMP'];
$EDD=$_POST['EDD'];



 
 $query = "INSERT INTO opd(`date`, `name`, `age`, `address`, `complents`, `pmc`, `prmc`, `lmp`, `oh`, `pastho`,`dmother`,`dfather`,`dsiblings`,`dgrandparent`,`dnil`,
 	`hmother`, `hfather`, `hsiblings`, `hgrandparent`, `hnil`,`marriage`,`firstd`, `secondd`, `thirdd`, `pet`, `personal_ho`, `clinical`, `hb`, `cbc`, `bldgroup`, `hbsag`, `hiv`,`first`, `second`, `lmp2`, `edd`) 
VALUES ('$date', '$p_name',$age,'$address','$present_comp','$pmc','$prmc','$lmp','$oh','$past_ho',$motherd,$fatherd,$siblingsd,$grandparentsd,$nild,$motherh,$fatherh,$siblingsh,$grandparentsh,$nilh,
    '$marriage',$firstd,$secondd,$thirdd,'$pets','$personal_ho','$Clinical','$HB','$CBC','$BLGR','$HBs','$HIV',$first,$second,'$LMP','$EDD')";
if(@mysql_query($query,$conn))
{
  echo "<h3>Record inserted successfully !</h3>";
}
else{
  echo " Not submitted.";
}

?>

<script src="js/bootstrap.js">

</script>
