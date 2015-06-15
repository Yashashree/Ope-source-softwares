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
$i=$_POST['i'];
$select=$_POST['select'];
$of=$_POST['of'];
$age=$_POST['age'];
$reside=$_POST['reside']; 
$income=$_POST['income'];
$child=$_POST['child'];
$religion=$_POST['religion'];
$male=$_POST['male'];
$female=$_POST['female']; 
$state=$_POST['state'];
$me=$_POST['me'];
$per=$_POST['per'];


$query = "INSERT INTO formf(`i`, `select`, `of`, `age`, `reside`, `income`, `child`, `religion`, `male`, `female`, `state`, `me`, `per`) VALUES ('$i','$select','$of',$age,'$reside',$income,$child,'$religion','$male','$female','$state','$me','$per')";

if(mysql_query($query,$conn))
    echo "<h3>Record inserted successfully ! </h3>";
else
    echo "Not inserted";
?>