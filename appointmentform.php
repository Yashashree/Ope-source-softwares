<?php
include 'header.php';
?>

<head>
  <meta charset="utf-8">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="css/yash.css">
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/bootstrap.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
</head>


 <form action="submit.php" method="post" id="loginform">
       <div class="row">
           <div class="col-md-offset-1 col-md-10 col-md-offset-1">
       <div class="jumbotron">
         
                 <div class="row well">
      
        <div class="col-sm-4 fbox">

            <div><h4>Nitave Hospital</h4></div></div>
                          <div class="col-md-8 fbox">
                    <div><h4>Appointment Form</h4></div></div>
           </div>
         <table class="table">
          <tr><td class="col-md-1">
           <label class="control-label">Name:</label>
           </td>
           <td class="col-md-4"><input class="form-control"type="text" name="name" required></td>
           <td>
           <label class="control-label">Contact No:</label>
           </td>
           <td><input class="form-control" type="number" name="name" required>
           </td>
         </tr>
         <tr>
          <td>
           <label class="control-label">Date: </label></td>
           <td><input class="form-control" type="text" id="datepicker" name="date" required>
           </td><td>
           <label class="col-md-4">Time: </label></td>
           <td><input class="form-control" type="text"  name="time" required>
           </td></tr>
           <tr><td class="col-sm-3"></td><td><input type="submit" class="btn btn-success" value="Submit" >
           <td class="col-sm-1"></td><td><input type="reset" class="btn btn-danger" value="Cancel" >
           </td></tr></table>
                                 
     </div>
           </div>
     </div>
</form>
</body>
</html>
            