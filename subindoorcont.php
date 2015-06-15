<?php
include 'header.php';
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
$no = $_POST['no'];
$name = $_POST['name'];
 
$d=$_POST['date'];
$datearr = split("/",$d);
$date=$datearr[2]."-".$datearr[0]."-".$datearr[1];


 
$time = $_POST['time'];
$dnote = $_POST['dnote'];
$time2 = $_POST['time2'];
$tpr = $_POST['tpr'];
$comment =$_POST['comment'];

$query = "INSERT INTO indoorcont(`no`, `name`, `date`, `time`, `dnote`, `time2`, `tpr`, `comment`) VALUES ($no,'$name','$date','$time','$dnote','$time2','$tpr','$comment')";
if(@mysql_query($query,$conn))
	echo "<h3>Record inserted successfully !</h3>";
else
	echo "Error occure..";
//include 'footer.php';

?>