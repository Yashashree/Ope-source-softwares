<?php
include 'header.php';
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
<li><a href="#tabs-3">Search</a></li>
</ul>
<div id="tabs-1">
    <p><ul>Continue filling the OPD Form</ul></p>
            <button id="b1" onclick="window.location='opdcasepaper.php'">continue</button>
</div>
<div id="tabs-2">
    <p><ul>Continue filling the indoor case paper Form</ul></p>
<button id="b2" onclick="window.location='Indoorpaper.php'">continue</button>
</div>
<div id="tabs-3">
    <p><ul>Search according to category</ul></p>
<button id="b3">continue</button>
</div>
</div>
</body>
</html>
            