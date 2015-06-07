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
  <link rel="stylesheet" href="css/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
    $( "#datepicker1" ).datepicker();
    $( "#datepicker2" ).datepicker();
  });
  </script>
  <script type="text/javascript">
$(document).ready(function(){
        $("#twins").click(function(){
       $("#twininfo").removeAttr('disabled');
   });});

$(document).ready(function(){
        $("#male").click(function(){
       $("#twininfo").attr('disabled',true);
   });});
$(document).ready(function(){
        $("#female").click(function(){
       $("#twininfo").attr('disabled',true);
   });});

  </script>
     <script type="text/javascript">
        function loaddata()
        {
           var value=document.getElementById("caseno").value;
              
            if(window.XMLHttpRequest)
            {
                xmlhttp=new XMLHttpRequest();
$           }
            else
            {
                xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
            }
            xmlhttp.onreadystatechange=function()
            {
                if(xmlhttp.readyState==4&&xmlhttp.status==200)
                {
                    // alert('alert');
                    document.getElementById('replace').innerHTML=xmlhttp.responseText;
                }
            }
                     

            xmlhttp.open('GET','loaddata.php?caseno='+value,'true');
 
            xmlhttp.send();
              

        }



            </script>
</head>


 <form action="submitindoor.php" method="post" id="loginform">
             
              <div class="row">
           <div class="col-md-offset-1 col-md-10 col-md-offset-1">
       <div class="jumbotron">
         
                 <div class="row well">
      
        <div class="col-sm-4 fbox">

            <div><h4>Nitave Hospital</h4></div></div>
            <div class="col-sm-4 fbox">
                <div><h4>Dr. S.B. Nitave</h4></div></div>
                <div class="col-sm-4 fbox">
                <div><h4>Indoor Paper</h4></div></div>
            
           </div>
           
           <table  class="table">
           <tr><td> <label class="control-label"> Bill No:</label></td>
           <td><input  class="form-control"type="text" name="billno"></td>
          
           <td><label class="control-label"> Case No:</label>
           </td><td><input class="form-control" type="text" name="caseno" id="caseno"></td>
           </tr>  
    </table>

  <div id="replace">
     
      
      <table>
             
      <tr> 
        <td class="col-sm-2"><label class="control-label" >Name:</label></td>
        <td><input class="form-control"type="text" name="pname" id="pname" onclick="loaddata()"></td>
        <td class="col-sm-1"></td><td><label class="control-label" style="margin-left:50px;">Age: </label></td>
        <td class="col-sm-1" ></td><td><input class="form-control"type="number"  name="age" required ></td>
   </tr> 
   </table>

    
               <table class="table">
           <tr><td><label class="control-label col-sm-4">Address:</label></td>
            <td><textarea class="form-control" rows="4" cols="40" placeholder="Type your address here.." name="address">
 
</textarea> 
</td></tr>
</table>
</div>

               <table class="table">
                 <tr><td><label class="control-label">Date of Admission:</label>
                  </td><td><input class="form-control"type="date" id="datepicker2" name="date" required>
               </td><td><label class="control-label">Date of Discharge:</label></td>
               <td><input class="form-control" type="text" id="datepicker1"   name="dischargedate">
               </td></tr></table>
               <table class="table">
<tr><td><label class="control-label">Diagnosis:</label>
        </td> <td>   <textarea  class="form-control"rows="4" cols="40" placeholder="" name="diagnosis">
 </textarea>     </td> </tr>
  <tr><td><label class="control-label">Treatement:</label></td>
         <td>   <textarea class="form-control" rows="4" cols="40" placeholder="" name="treatment">
 </textarea></td></tr></table>
               <table class="table">
           <tr><td><label class="control-label">Surgeon Name:</label>
           </td><td><input class="form-control" type="text" name="surgeon" value="Dr. S. B. Nitave">
            </td>
<td><label class="control-label"> Anasthesia Surgeon:</td>
  <td>
    <select class="form-control" name="anasthesiasurgeon" id="pets">
            <option value="nitave">S. B. Nitave</option>
            <option value ="d2">doctor2</option>
            <option value="d3">doctor3</option>
            <option value = "d4">doctor4</option>
           
    </select>
</td>

</tr>
              <tr><td><label class="control-label">Delivery :</label>
               </td><td><textarea class="form-control"rows="3" cols="40" name="delivery" ></textarea></td>
              <td> <label class="control-label">Anasthesia:</label>
               </td><td><textarea class="form-control" rows="3" cols="40" name="anasthesia"></textarea>
               </td></tr>
             </table>
                <div class="row well">
      
        <div class="col-sm-4 fbox">

            <div><h4>Baby's Information</h4></div></div>
            <div class="col-sm-4 fbox">
                    </div>
               </div>
               <table class="table">
              <tr><td> <label class="control-label">Date Of Birth:</label></td>
                <td><input class="form-control" type="text" class="datepicker" id="datepicker" name="dateofbirth"></td>
              <td><label class="control-label">Birth Time:</label></td>
              <td><input class="form-control" id="datepicker" type="text" name="birthtime"></td>
              </tr><tr><td><label class="control-label">Weight:</label></td>
              <td><input class="form-control" type="number" name="weight" required></td>
              </tr ></table> 
              <table class="table">      
               <tr><td><label>Gender :</label></td>
               <td><label class="control-label">Male</label>
                <input type="radio" name="Gender" id="male" value="male"></td> 
                <td><label class="control-label">Female</label>
                <input type="radio" name="Gender" id="female" value="Female" ></td>
                 <td ><label class="control-label">Twins</label>
              <input type="radio" name="Gender" id="twins" value="Twins" >
                </td>
                <td><input id="twininfo" type="text" class="form-control" name="twininfo" disabled>
                </td>
            </tr></table>
         <table class="table">
          <tr>
            <td><label class="control-label col-sm-5">Status:</label>
           </td>
           <td class="col-sm-4"><input  class="form-control" type="text" name="status">
           </td>
         <td><label class="control-label">Asphxia:</label></td>
          <td class="col-sm-4"><input class="form-control" type="text" name="it"></td><td class="col-sm-8"></td></tr>
        </table>
         <table class="table">
         <tr><td class="col-sm-3"></td><td><input type="submit" class="btn btn-success" value="Submit" id="submit" ><td><input type="reset" class="btn btn-danger" value="Cancel" ></td>
               </td></tr>
           </table>
       </table>
         
  
  
                             
    
     
           </div>
     </div>
</form>
<script src="js/bootstrap.js">

</script>
</body>
</html>

