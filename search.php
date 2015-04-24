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
    <style>
    </style>
</head>
 
       <div class="row">
           <div class="col-md-offset-1 col-md-10 col-md-offset-1">
       <div class="jumbotron">
         
                 <div class="row well">
      
        <div class="col-sm-4 fbox">

            <div><h4>Nitave Hospital</h4></div></div>
            <div class="col-sm-4 fbox">
                <div><h4>Dr. S.B. Nitave</h4></div></div>
                <div class="col-sm-4 fbox">
                    <div><h4>Search Patient</h4></div></div>
            
           </div>
           <br><br>
    <div>
    <form action="searchcasepaper.php" method="post">
        <table class="table">
      <tr>
          <td><label class="control-label">Search from casepaper:</label></td>
      </tr>
      <tr>
      	  <td class="col-sm-3"><label class="control-label">Name:</label></td>
          <td class="col-sm-3"><input class="form-control" type="text" name="name"></td>
          <td class="col-sm-2"><label class="control-label">Case_No:</label></td>
           <td class="col-sm-3"><input class="form-control" type="text" name="no"></td>
           <td class="col-sm-3"><input class="btn btn-success " type="submit" value="SEARCH"></td>
           
          </tr>
      </table>
      </form>

      <table class="table">
      <tr>
          <td><label class="control-label">Search from Indoor Paper:</label></td>
      </tr></table>
      <table class="table"><tr>
      	  <td class="col-sm-3"><label class="control-label">Name:</label></td>
          <td class="col-sm-2"><input class="form-control" type="text" name="p_name"></td>
           <td class="col-sm-2"><label class="control-label">Case_No:</label></td>
           <td class="col-sm-3"><input class="form-control" type="text" name="p_name"></td>
           <td class="col-sm-3"><input class="btn btn-success " type="submit" value="SEARCH"></td>
           </tr>
</table>
 <table class="table">
      <tr>
          <td><label class="control-label">Search from Indoor Sheet:</label></td>
      </tr></table>
 <table class="table">
 			<tr>
      	  <td class="col-sm-3"><label class="control-label">Name:</label></td>
          <td class="col-sm-2"><input class="form-control" type="text" name="p_name"></td>
           <td class="col-sm-2"><label class="control-label">Case_No:</label></td>
           <td class="col-sm-3"><input class="form-control" type="text" name="p_name"></td>
           <td class="col-sm-3"><input class="btn btn-success " type="submit" value="SEARCH"></td>
           </tr>                      
</table>


 <table class="table">
      <tr>
          <td><label class="control-label">Search According To Delivery Type:</label></td>
      </tr></table>
 <table class="table">
 			 
<td><label class="control-label"> Delivery Type:</td>
  <td>
   
      
  <select class="form-control"  style="width:180px;" >
    <option> Scisor</option>
    <option>Normal</option>
   
  </select></div></td>
           <td class="col-sm-3"><input class="btn btn-success " type="submit" value="SEARCH"></td>
          </tr>                    
</table>



 <table class="table">
      <tr>
          <td><label class="control-label">Search According To Date:</label></td>
      </tr></table>
 <table class="table">
 			<tr>
      	  <td class="col-sm-3"><label class="control-label">Date:</label></td>
          <td class="col-sm-2"><input class="form-control" type="text" name="p_name" id="datepicker"></td>
          <td class="col-sm-4"></td>
          <td class="col-sm-2"><input class="btn btn-success " type="submit" value="SEARCH"></td>
           </tr>                      
</table>
 
