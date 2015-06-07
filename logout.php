<?php
@session_start();
echo $_SESSION['id'];
$_SESSION['id']='destroyed';
session_destroy();
header('location:login.php');

?>