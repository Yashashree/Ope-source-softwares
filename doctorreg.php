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


 <form action="subdoctorreg.php" method="post" id="loginform">
       <div class="row">
           <div class="col-md-offset-1 col-md-10 col-md-offset-1">
       <div class="jumbotron">
         
                 <div class="row well">
      
        <div class="col-sm-4 fbox">

            
            <div><h4>Nitave Hospital</h4></div></div>
            <div class="col-sm-4 fbox">
                <div><h4>Doctor Registration</h4></div></div>
                <div class="col-sm-4 fbox">
                    <div><h4>Dr.S.B.Nitave</h4></div></div>
            
           </div>
           <table  class="table">
          <tr><td> <label class="control-label"> Name</label>
           </td><td><input  class="form-control"type="text" name="name" required></td>
           
</tr>           
           <tr><td><label class="control-label">Age</label>
           </td><td><input class="form-control" type="number" name="age" required>
            </td> <td><label class="control-label"> Gender</td>
               <td>
                  <select class="form-control" role="menu" name="gender">
                      <option>Select Gender</option>
                      <option> Male</option>
                      <option>Female</option>
                   </select>
               </td></tr>
           
          </table>
           
               <table class="table">
              <tr><td> <label class="control-label">Date Of Birth</label></td>
                <td><input class="form-control" type="text"  id="datepicker" name="ddob"></td></table>
           
               
               <table class="table">
              <tr><td><label class="control-label">Address </label>
               </td><td><textarea class="form-control"rows="3" cols="40" name="address" required></textarea></td>
            </tr>
             </table>
           
           <table  class="table">
          <tr><td> <label class="control-label"> Occupation</label>
           </td><td><input  class="form-control"type="text" name="occupation" required></td>
              </tr>
               <tr>
           <td><label class="control-label"> User Name</label>
           </td><td><input class="form-control" type="text" name="uname" required></td>
</tr>           
          <tr><td> <label class="control-label"> Password</label>
           </td><td><input  class="form-control"type="password" name="pass" required></td>
              </tr>
               <tr>
           <td><label class="control-label"> Email Id</label>
           </td><td><input class="form-control" type="email" name="email" required ></td>
</tr>      
               <tr>
           <td><label class="control-label"> Phone No</label>
           </td><td><input class="form-control" type="text" name="phone" required></td>
</tr>      
          </table>
           
           
           
         <table class="table">
         <tr><td class="col-sm-5"></td><td><input type="submit" class="btn btn-success" value="Register" id="submit" >
               </td></tr>
           </table>
       </table>
         
  
  
                             
    
     
           </div>
     </div>
</form>
</body>
</html>
            