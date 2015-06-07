<?php
include 'header.php'; 
include 'authenticate.php'
?>



<head>
  <meta charset="utf-8">
 
  <link rel="stylesheet" href="css/yash.css">
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
</head>

   
        <div id="tabs">
<ul>
<li><a href="#tabs-1">OPD Case Paper</a></li>
<li><a href="#tabs-2">Indoor Case Paper</a></li>
<li><a href="#tabs-3">Indoor Sheet Paper</a></li>
 
<li><a href="#tabs-5">Search</a></li>
<li><a href="#tabs-6">Register New User</a></li>
<li><a href="#tabs-7">Form F</a></li>
</ul>
<div id="tabs-1">
    <p><ul>Continue filling the OPD Form</ul></p>
            <button id="b1" onclick="window.location='opdcasepaper.php'">Continue</button>
</div>
<div id="tabs-2">
    <p><ul>Continue filling the indoor case paper Form</ul></p>
<button id="b2" onclick="window.location='Indoorpaper.php'">Continue</button>
</div>
<div id="tabs-3">
    <p> <ul>Continue filling the indoor sheet Form  
    </ul></p>
    <button id="b3" onclick="window.location='indoorcontsheet.php'">Continue</button>
  

</div> 
<div id="tabs-5">
    <p> <ul>Continue to find records.  
    </ul></p>
    <button id="b5" onclick="window.location='search.php'">Continue</button>
  

</div>

<div id="tabs-6">
    <p> <ul>Continue to find records.  
    </ul></p>
    <button id="b5" onclick="window.location='doctorreg.php'">Doctor Registration </button>

    <button id="b5" onclick="window.location='receptionistreg.php'">Receptionist Registration</button>
  

</div>
<div id="tabs-7">
    <p> <ul>Continue to Form F.  
    </ul></p>
    <button id="b5" onclick="window.location='Formf.php'">Continue </button>
 
</div>
</div> 
<script src="js/bootstrap.min.js">
</script>
</body>
</html>
            