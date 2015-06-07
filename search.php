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
  	$( "#datepicker1" ).datepicker();
  
  });


  </script>
  <script type="text/javascript">
        function searchdata()
        {
           var formtype=document.getElementById("formtype").value;
           var fromdate=document.getElementById("datepicker").value;
           var todate=document.getElementById("datepicker1").value;
           
            if(window.XMLHttpRequest)
            {
                xmlhttp=new XMLHttpRequest();
            }
            else
            {
                xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
            }
            xmlhttp.onreadystatechange=function()
            {
                if(xmlhttp.readyState==4&&xmlhttp.status==200)
                {
                    // alert('alert');
                    document.getElementById('result').innerHTML=xmlhttp.responseText;
                }
            }
                     

            xmlhttp.open('GET','searchbydate.php?formtype='+formtype+"&fromdate="+fromdate+"&todate="+todate,'true');
 
            xmlhttp.send();
              

        }
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
    <form action="searchcasepaper.php" method="get">
        <table class="table">
      <tr>
          <td class="col-md-5"><label class="control-label">Search from casepaper:</label></td>
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
<form action="searchindoorpaper.php" method="get">
      <table class="table">
      <tr>
          <td><label class="control-label">Search from Indoor Paper:</label></td>
      </tr></table>
      <table class="table"><tr>
      	  <td class="col-sm-3"><label class="control-label">Name:</label></td>
          <td class="col-sm-2"><input class="form-control" type="text" name="name"></td>
           <td class="col-sm-2"><label class="control-label">Case_No:</label></td>
           <td class="col-sm-3"><input class="form-control" type="text" name="no"></td>
           <td class="col-sm-3"><input class="btn btn-success " type="submit" value="SEARCH"></td>
           </tr>
</table>
</form>

<form action="searchindoorsheet.php" method="get">
 <table class="table">
      <tr>  
          <td><label class="control-label">Search from Indoor Sheet:</label></td>
      </tr></table>
 <table class="table">
 			<tr>
      	  <td class="col-sm-3"><label class="control-label">Name:</label></td>
          <td class="col-sm-2"><input class="form-control" type="text" name="name"></td>
           <td class="col-sm-2"><label class="control-label">Case_No:</label></td>
           <td class="col-sm-3"><input class="form-control" type="text" name="no"></td>
           <td class="col-sm-3"><input class="btn btn-success " type="submit" value="SEARCH"></td>
           </tr>                      
</table>
</form>
 
 </form>

<form action="searchdoctreg.php" method="get">
 <table class="table">
      <tr>
          <td><label class="control-label">Search For Doctor:</label></td>
      </tr></table>
 <table class="table">
 			<tr>
      	  <td class="col-sm-3"><label class="control-label">Name:</label></td>
          <td class="col-sm-2"><input class="form-control" type="text" name="name"></td>
            
           <td class="col-sm-3"><input class="btn btn-success " type="submit" value="SEARCH"></td>
           </tr>                      
</table>
</form>
 
  
<table class="table">
      <tr>
          <td><label class="control-label">Search According To Date:</label></td>
      </tr></table>
 <table class="table">
 	<tr>
 	  <td class="col-sm-3"><label class="control-label">Select form:</label></td>
 		
  <td class="col-sm-4"> 
<select class="form-control" name="formtype" id="formtype">
            <option value="nSull">Select One</option>
            <option value ="opd">OPD Case Paper</option>
            <option value="indoor">Indoor Case Paper</option>
            <option value = "indoorcont">Indoor Sheet Paper</option> 
    </select>
</td>
</tr>
 			<tr>
      	  <td class="col-sm-1"><label class="control-label">From:</label></td>
 
          <td class="col-sm-3"><input class="form-control" type="text" name="fromdate" id="datepicker"></td>
           
      	  <td class="col-sm-1"><label class="control-label">To:</label></td>
           <td class="col-sm-3"><input class="form-control" type="text" name="todate" id="datepicker1"></td>
          <td class="col-sm-4"></td>
          <td class="col-sm-2"><input class="btn btn-success" value="SEARCH" onclick="searchdata();"></td>
           </tr>

</table>

<div id="result"></div> 
  