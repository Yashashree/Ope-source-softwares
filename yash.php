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


 <form  class="form-horizontal" role="form" action="#" method="post" id="loginform">
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
           <br><br>
                <label class="col-sm-1 control-label">No:</label>
           <div class="col-sm-5">
                <input  class="form-control" type="text" name="no">
           </div> 
                <label class="col-sm-1 control-label">Date: </label>
           <div class="col-sm-5">
                <input class="form-control" type="text" id="datepicker" name="date">
           </div>
           <br><br><br>
                <label class="col-sm-1 control-label">Name:</label>
           <div class="col-sm-5">
                <input class="form-control"type="text" name="name">
            </div>
                <label  class="col-sm-1 control-label">Age: </label>
           <div class="col-sm-5">
                <input class="form-control" type="text"  name="age">
           </div>
            <br><br><br>
           <label  class="col-sm-1 control-label">Address:</label>
           <div class="col-sm-7 ">
            <textarea class="form-control" rows="4" cols="70" placeholder="Type your address here..">
            </textarea> 
          </div>

            
            <div>
              <br><br><br>
          <label class="col-md-8 ">PMC:</label>
           <div class="col-sm-7">
              
            <textarea class="form-control" rows="4" cols="70" placeholder=""> </textarea> 
          </div>
        </div>

          <br><br><br>      
           <label class="col-sm-1 control-label">Pr Mc:</label>
           <div class="col-sm-6">
           <input  class="form-control" type="text" name="name">
         </div>
                
<br><br><br>
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
            
<label>CBC:</label>
           <input type="text" name="name">
               
<label>Bl.Gr.:</label>
           <input type="text" name="name">
               <br><br>
<label>HBs Ag:</label>
           <input type="text" name="name">
               
<label>HIV:</label>
           <input type="text" name="name">
               
<label>Inj TT 1st 2nd:</label>
           <input type="text" name="name">
            <br><br>
<label>LMP:</label>
           <input type="text" name="name">
               
<label>EDD:</label>
           <input type="text" name="name">
               

               <br><br>
  <input type="submit" class="btn btn-success" value="Submit" >
               <input type="submit" class="btn btn-danger" value="Cancel" >
           
  
                             
    
     </div>
           </div>
     </div>
</form>
</body>
</html>
            