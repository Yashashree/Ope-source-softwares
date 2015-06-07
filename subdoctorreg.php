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
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$ddob=$_POST['ddob'];
$address=$_POST['address'];
$occupation=$_POST['occupation'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$phone=$_POST['phone'];
//echo $submit=$_POST['submit'];
$query = "INSERT INTO doctorreg(`name`, `age`, `gender`, `ddob`, `address`, `occupation`, `uname`, `pass`, `email`, `phone`) VALUES ('$name',$age,'$gender','$ddob','$address','$occupation','$uname','$pass','$email',$phone)";

if(@mysql_query($query,$conn))
 
 {
  echo "<h3>Record Inserted Successfully !</h3>";
}
else
{
    echo "Not inserted";
}
?>