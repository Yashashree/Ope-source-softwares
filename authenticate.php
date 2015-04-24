<?php
@session_start();
 
if(!isset($_SESSION['id'])&&empty($_SESSION['id']))
die('Please login first !!!');
?>