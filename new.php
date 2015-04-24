<?php
include 'header.php';
?>

<head>
  <meta charset="utf-8">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="css/jquery-ui.css">
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
</head>


 <form action="#" method="post" id="loginform">
       <div class="row">
           <div class="col-md-offset-1 col-md-10 col-md-offset-1">
       <div class="jumbotron">
         <div class="row well">
      
        <div class="col-sm-4 fbox">

            <div><h4>Nitave Hospital</h4></div></div>
            <div class="col-sm-4 fbox">
                <div><h4>Dr. S.B. Nitave</h4></div></div>
                <div class="col-sm-4 fbox">
                    <div><h4>OPD Case Paper</h4></div></div>
            
           </div>
           
           <hr><br>
           
           <div class="col-md-6 fbox"><label>No:</label>
               <input type="text" name="no"></div>
                <div class="col-md-6 fbox">      <label>Date: </label><input type="text" id="datepicker" name="date">
           </div>
           <br><br>
           
           <label>Name:</label>
           <input type="text" name="name">
           <label>Age: </label><input type="text"  name="age">
           <br><br>
           <div class="row">
               
           <label>Address:</label>
            <textarea rows="4" cols="70" placeholder="Type your address here..">
 
</textarea> 
               <br>
               <br>
           <label>PMC:</label>
            <textarea rows="4" cols="70" placeholder="">
 </textarea> 
               <br>
               <br>
           <label>Pr Mc:</label>
           <input type="text" name="name">
               
            <label>LMP:</label>
           <input type="text" name="name">
<br><br>
               <label>OH:</label>
               <textarea rows="1" cols="70" ></textarea>
               <br><br>
               
               <label>Family OH:</label>
               <textarea rows="3" cols="40" ></textarea>
               <label>Past OH:</label>
               <textarea rows="3" cols="40" ></textarea>
               <br><br>
               
               <label>Clinical Exam:</label>
               <textarea rows="4" cols="70" ></textarea>
               <br><br>
<label>HB:</label>
           <input type="text" name="name">
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label>CBC:</label>
           <input type="text" name="name">
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label>Bl.Gr.:</label>
           <input type="text" name="name">
               <br><br>
<label>HBs Ag:</label>
           <input type="text" name="name">
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label>HIV:</label>
           <input type="text" name="name">
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label>Inj TT 1st 2nd:</label>
           <input type="text" name="name">
            <br><br>
<label>LMP</label>
           <input type="text" name="name">
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label>EDD</label>
           <input type="text" name="name">
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

               <br><br>
  <input type="submit" class="btn btn-success" value="Submit" >
               <input type="submit" class="btn btn-danger" value="Cancel" >
           
  
                             
    
     </div>
           </div>
     </div>
</form>
</body>
</html>
            