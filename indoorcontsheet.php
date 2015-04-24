<?php
include 'header.php';
include 'authenticate.php';
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


 <form action="subindoorcont.php" method="post" id="loginform">
       <div class="row">
           <div class="col-md-offset-1 col-md-10 col-md-offset-1">
       <div class="jumbotron">
         
                 <div class="row well">
      
        <div class="col-sm-4 fbox">

            <div><h4>Nitave Hospital</h4></div></div>
                          <div class="col-md-8 fbox">
                    <div><h4>Indoor Cont Sheet</h4></div></div>
           </div>
         <table class="table">
          <tr><td>
           <label class="control-label">Case No:</label>
           </td>
           <td><input class="form-control"type="text" name="no" required></td>
           <td>
           <label class="control-label">Patient Name:</label>
           </td>
           <td><input class="form-control" type="text" name="name" required>
           </td>
         </tr>
         <tr>
          <td>
           <label class="control-label">Date: </label></td>
           <td><input class="form-control" type="text" id="datepicker" name="date" required>
           </td><td>
           <label class="control-label">Time : </label></td>
           <td><input class="form-control" type="text"  name="time" required>
           </td></tr></table>
            <table class="table">
           <tr><td><label class="control-label">Doctors Notes and Orders :</label></td>
            <td><textarea class="form-control" rows="6" cols="60" placeholder="Type your address here.." name="dnote" required>
 
</textarea> </td></tr></table>
<table class="table">
              <tr><td> <label class="control-label">Nurse Record :</label></td></tr>
           <tr><td> <label class="control-label">Time:</label></td>
               <td><input class="form-control" type="text" name="time2"></td>
            <td><label class="control-label">TPR B.P:</label></td>
           <td><input class="form-control" type="text" name="tpr"></td></tr>
           </table><table class="table"><tr><td><textarea class="form-control"rows="4" cols="70" name="comment" >
</textarea></td></tr></table><table class="table">
<tr><td class="col-sm-5"></td><td><input type="submit" class="btn btn-success" value="Submit" >
           </td></tr>
</table>                        
     </div>
           </div>
     </div>
</form>
</body>
</html>
            