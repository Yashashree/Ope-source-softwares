<?php
include 'header.php';
?>

<head>
  <meta charset="utf-8">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="css/yash.css">
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <script>
  $(function() {
    $( ".datepicker" ).datepicker();
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
           <label> Bill No:&nbsp;&nbsp;</label>
           <input type="text" name="no">
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label> Case No:&nbsp;&nbsp;</label>
           <input type="text" name="no">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
           <br><br>
           
           <label>Name:&nbsp;&nbsp;&nbsp;&nbsp;</label>
           <input type="text" name="name">
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
           <label>&nbsp;Age:&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text"  name="age">
           <br><br>
           <div class="row">
               
           <label>&nbsp;&nbsp;Address:</label>
            <textarea rows="4" cols="70" placeholder="Type your address here..">
 
</textarea> 
               <br>
    <br>
                 <label>Date of Admission:&nbsp;&nbsp;</label><input type="text" class="datepicker" id="datepicker1" name="date">
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
         <label>Date of Discharge:&nbsp;&nbsp;</label><input type="text" class="datepicker"id="datepicker2" name="date">
               <br><br>
<label>&nbsp;&nbsp;Diagnosis:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <textarea rows="4" cols="70" placeholder="">
 </textarea>      <br><br>
                              
               

                <label>&nbsp;&nbsp;Treatement:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <textarea rows="4" cols="70" placeholder="">
 </textarea>
               <br>
               <br>
           <label>&nbsp;&nbsp;Surgeon Name:&nbsp;&nbsp;&nbsp;&nbsp;</label>
           <input type="text" name="name">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

            <label>Anasthesia Surgeon:</label>
           <input type="text" name="name">
<br><br>
              
               
               <label>&nbsp;&nbsp;Delivery :</label>
               <textarea rows="3" cols="40" ></textarea>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <label>Anasthesia:</label>
               <textarea rows="3" cols="40" ></textarea>
               <br><br>
                <div class="row well">
      
        <div class="col-sm-4 fbox">

            <div><h4>Baby's Information</h4></div></div>
            <div class="col-sm-4 fbox">
                    </div>
               </div>
               
                <label>Date Of Birth:&nbsp;&nbsp;</label><input type="text" class="datepicker" id="datepicker3" name="date">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
               
              <label>&nbsp;&nbsp;Birth Time:&nbsp;&nbsp;&nbsp;&nbsp;</label>
           <input type="text" name="name">
                 <label>&nbsp;&nbsp;Weight:&nbsp;&nbsp;&nbsp;&nbsp;</label>
           <input type="text" name="name">
         
               <br><br>
               <label>&nbsp;&nbsp;Gender :</label><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label for="female">Male  &nbsp;&nbsp;&nbsp;&nbsp;</label>
               <input type="radio" name="Gender" id="male" value="male"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<label>Status:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
           <input type="text" name="name">
              <br>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="female">Female&nbsp;&nbsp;</label>
               <input type="radio" name="Gender" id="Female" value="Female">
              
<br>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="female">Twins  &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="radio" name="Gender" id="Twins" value="Twins">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<label>Asphxia:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
           <input type="text" name="name"><br>

               <br><br>
  <input type="submit" class="btn btn-success" value="Submit" >
               <input type="submit" class="btn btn-danger" value="Cancel" >
           
  
                             
    
     </div>
           </div>
     </div>
</form>
</body>
</html>
            