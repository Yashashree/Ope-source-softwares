<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="icon" type="image/png" href="img/favicon.png">
            <link href="css/style1.css" type="text/css" rel="stylesheet">
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/bootstrap.theme.min.css" rel="stylesheet">
            <link rel="shortcut icon" href="img/favicon.ico"/>
  
     <title> Nitave Hospital
    </title>
    </head>
    <body>
        
      <header style="height: 25px; width:1062; margin-left:-3%;">
       
           <div class="navbar navbar-inverse" style="height: 25px; width:1066; margin-left:-0.5%;">
          
              <ul class="nav nav-pills  pull-right">
          
            <li><a href="index.php">
                 <span class="glyphicon glyphicon-home"></span>
                Home</a></li>
            <li><a href="aboutUs.php">
                          <span class="glyphicon glyphicon-comment"></span>
                About Us</a></li>
            <li><a href="contactUs.php" >
                 <span class="glyphicon glyphicon-phone"></span>
                Contact Us</a></li>
          
                  
<?php
@session_start();
if(@$_SESSION['id']==NULL)
{
    echo "
                  <li><a href='login.php'>
                 <span class='glyphicon glyphicon-user'></span>
               Login</a></li>
        ";
    
}
else
{
     
    
    echo "        
<li role='presentation' class='dropdown'>
    <a class='dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-expanded='false'><span class='glyphicon glyphicon-user'></span>";
     echo @$_SESSION['id'];
    
    echo"<span class='caret'></span>
    </a>
    <ul class='dropdown-menu' role='menu'>
        <li><a href='#'>My Profile</a></li>
        <li><a href='formtabs.php'>Forms</a></li>
         <li><a href='Receptionist_registration.php'>Add User</a></li>
        <li><a href='#'>Change Password</a></li>
        <li><a href='logout.php'>Log Out</a></li> 
    </ul>
  </li>";
    
}     
                  
 ?>
                  
  </ul>
  
 </header>
              
        