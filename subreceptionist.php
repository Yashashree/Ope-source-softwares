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
  <link rel="stylesheet" href="css/style.css">
  
   </head>


<?php
$name=$_POST['name'];
$rid=$_POST['rid'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$ddob=$_POST['ddob'];
$address=$_POST['address'];
$bgroup=$_POST['bgroup'];
$occupation=$_POST['occupation'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$phone=$_POST['phone'];

 $query = "INSERT INTO receptionistreg(`name`, `rid`, `age`, `gender`, `ddob`, `address`, `bgroup`, `occupation`, `uname`, `pass`, `email`, `phone`) VALUES ('$name',$rid,$age,'$gender','$ddob','$address','$bgroup','$occupation','$uname','$pass','$email','$phone')";

if(@mysql_query($query,$conn))
    echo "Record inserted successfully.";
else
    echo "Not inserted";
?>