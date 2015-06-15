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


 <form action="subformf.php" method="post" id="loginform">
       <div class="row">
           <div class="col-md-offset-1 col-md-10 col-md-offset-1">
       <div class="jumbotron">
         
                 <div class="row well">
      
                          <div class="col-md-12 fbox">
                    <div><h4>Form F1</h4>
                      <h6>(See Proviso to section 4(3), Rule 9(4), and Rule 10(1 A))</h6>
                      <div class="col-md-12 fbox"><h6>FORM FOR MAINTENANCE OF RECORD IN RESPECT OF PREGNANT WOMAN BY GENETIC CLINIC/ ULTRASOUND / IMAGING CENTRE </h6></div></div>
           </div>
         <table class="table">
          <tr><td><h6> Place: Sangli </h6></td>
              <td><div style='text-align:center'> <h6>Date: </h6></div> </td>
         </tr>
        </table>
                     
                     
                     <table class="table">
                     <div class="col-md-12 fbox">
                      <div class="col-md-12 fbox"><h6>Declaration And Consent Of Pregnant Woman</h6></div></div>
           </div>
                     
                    <tr><td><label class="control-label"><h6>I(Mrs.)</h6> </label></td>
           <td><input class="form-control"type="text"  name="i" required>
           </td>
                        <td><label class="control-label"><h6>Select</h6> </label>
                        <td><select class="form-control" name="select" required>
                     <option>Select</option>
                     <option>Wife</option>
                     <option>Doctor</option>
                 </select></td></td>
           <td>   <label class="control-label"><h6>of</h6> </label></td>
           <td><input class="form-control"type="text"  name="of" required>
           </td></tr>
               </table>
                     
                     
     <table class="table">
                    <tr><td><label class="control-label"><h6>Age</h6> </label></td>
           <td><input class="form-control"type="number"  name="age" required>
           </td>
                        <td><h6>Years.</h6></td>
                        <td><label class="control-label"><h6>Residing At</h6> </label>
                        <td><textarea class="form-control"rows="4" cols="70" name="reside" required></textarea></td></td>
           </tr>
           </table>                
     
                     <table class="table">
                     <div class="col-md-12 fbox">
                      <div class="col-md-12 fbox"><h6>Do here by give consent to perform.The procedure(ultrasound) on Me and also declare that by undergoing sonography I do not want to know the sex of my foetus.</h6></div></div>
           </div>
                     
                    <tr><td><label class="control-label"><h6>Income(Rs.per Month)</h6> </label></td>
           <td><input class="form-control"type="number"  name="income" required>
           </td>
                        <td><label class="control-label"><h6>No. of living children</h6> </label></td>
           <td><input class="form-control"type="number"  name="child" required></td>
                     </tr>

                     </table>


 <table class="table">
                     <div class="col-md-12 fbox"></div>
           </div>
                    <tr><td><label class="control-label"><h6>Religion</h6> </label></td>
           <td><input class="form-control"type="text"  name="religion" required>
           </td>
                        <td><label class="control-label"><h6>Male</h6> </label></td>
           <td><input class="form-control"type="text"  name="male" required></td>
                        <td><label class="control-label"><h6>Female</h6> </label></td>
           <td><input class="form-control"type="text"  name="female" required></td>
                     
                     </tr>
        <tr><td><label class="control-label"><h6>State</h6> </label></td>
           <td><input class="form-control"type="text"  name="state" required></td>
                </tr>
                     </table>


<table class="table">
                     <div class="col-md-12 fbox">
                      <div class="col-md-12 fbox"><h6>DECLARATION OF DOCTOR/PERSON CONDUCTING ULTRASONOGRAPHY/IMAGE SCANNING </h6></div></div>
           </div>
                     
                    <tr><td><label class="control-label"><h6>I,</h6> </label></td>
           <td><input class="form-control"type="text"  name="me" required>
           </td>
                        <td><label class="control-label"><h6>(name of the person conducting ultrasonography/image scanning ) declair that while conducting ultrasonography/image on Ms.</h6> </label></td>
           <td><input class="form-control"type="text"  name="per" required></td>
                     </tr>
                     </table>



<table class="table">
                     <div class="col-md-12 fbox"> 
                    <tr><td><h6>(name of the pregnant woman,) I have neither detected nor disclosed sex of her foetus to any body in any manner.</h6></td></tr>
 </table>

         <table class="table"><tr>
              <td><div style='text-align:left'> <h6>Address and Registration No.: </h6></div> </td>
         </tr>
             <tr>
              <td><div style='text-align:left'> <h6>Nitave Hospital,Sangli </h6></div> </td>
                 <td><div style="text-align:center"><h6>Signature with stamp Radilogist/Gynaecologist,Director or owner.</h6></div></td>
         </tr>
        </table>



   
         <table class="table">
         <tr><td class="col-sm-5"></td><td><input type="submit" class="btn btn-success" value="Submit" >
               </td></tr>
           </table>
     </div>
           </div>
     </div>
</form>
</body>
</html>
            