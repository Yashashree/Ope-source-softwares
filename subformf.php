<?php
include 'header.php';
include 'DbConnect.php';
?>

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
    echo "Record inserted successfully.";
else
    echo "Not inserted";
?>