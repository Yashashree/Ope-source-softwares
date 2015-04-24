<?php
include 'header.php';
//include 'authenticate.php'
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
  });
  </script>
  <script>
   $(document).ready(function(){
        $("#radio1").click(function(){
       $("#ch1").removeAttr('disabled');
     $("#ch2").removeAttr('disabled');
       $("#ch3").removeAttr('disabled');
        });});
        
        $(document).ready(function(){
        $("#radio2").click(function(){
        $("#ch1").attr('disabled',true);
     $("#ch2").attr('disabled',true);
       $("#ch3").attr('disabled',true);
        });});
     
    </script>
    <script type="text/javascript">

function setdate(){
var date=document.getElementById("datepicker").value;
    //alert("date is picked.");
    if(date=="")
    {
        alert("Enter date first.");
    }
    else
    {
        document.getElementById("lmp2").value=date;
    }
}
</script>
    <style>
    </style>
</head>


 <form action="submitopd.php" method="post" id="loginform">
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
    <div>
        <table class="table">
      <tr>
          <td><label class="control-label">No:</label></td>
          <td> <input class="form-control" type="text" name="case_no" ></td>
           

          <td> <label class="control-label"style="margin-left:50px;">Date: </label></td>
          <td><input class="form-control"type="text"  name="date" value=" <?php echo date("d/m/Y"); ?>" required></td>
        
    </tr>
            
        
    <tr> 
        <td><label class="control-label" >Name:</label></td>
        <td > <input class="form-control"type="text" name="p_name" required ></td>
        <td><label class="control-label" style="margin-left:50px;">Age: </label></td>
        <td><input class="form-control"type="number"  name="age" required ></td>
   </tr>                    
</table>
<table class="table">
     <tr>
        <td><label class="control-label"> Address:</label></td>
        <td><textarea class="form-control" rows="4" cols="50" name="address" placeholder="Type your address here.."required style=" resize:none;"></textarea></td> 
         </tr>
    <tr>
         <td><label class="control-label"> Present Complaints:</label></td>
        <td><textarea class="form-control" rows="4" cols="50" placeholder=" " name="present_comp"required style=" resize:none;"></textarea></td> 
    </tr>
</table>
<table class="table">
    <tr>
        <td><label class="control-label"> PMC: </label></td>
        <td><textarea class="form-control" rows="4" cols="30" name="pmc" required style=" resize:none;">
            </textarea> </td>
            <td><label class="control-label"> Pr Mc: </label></td>
             <td><input class="form-control" type="text" name="pmrc" value="Regular" ></td>
    </tr>
 
    <tr>

            <td><label class="control-label">LMP:</label></td>
            <td><input class="form-control" type="text" id="datepicker" name="lmp" required></td>
         
            <td><label class="control-label"> OH: </label></td>
            <td><textarea class="form-control" rows="1" cols="30" name="oh" style="resize:none;" onclick="setdate()"></textarea></td>
        </tr>
        </table>
        <table class="table">
       <td> <label class="control-label">Past OH:</label></td>
               <td><textarea class="form-control" rows="3" cols="40" name="past_ho"></textarea></td>
              
               </table>
             <table class="table">
             <tr><td> <label class="control-label">Family H/O :</label></div>
            </td></tr>
           <tr><td> <label > Diabetes:</label></td>
     <td><label> <input type="checkbox" name="motherd" value="mother"> Mother
    </label></td>
     <td><label> <input type="checkbox" name="fatherd" value="father"> Father
    </label></td>
     <td><label> <input type="checkbox" name="siblingsd" value="Siblings"> Siblings
    </label></td>
     <td><label> <input type="checkbox" name="grandparentsd" value="Grandparents"> Grandparents
    </label></td>
     <td><label> <input type="checkbox" name="nild" value="Nil"> Nil
    </label></td></tr>
    <tr>
      <td> <label > Hypertension:</label></td>
     <td><label> <input type="checkbox"name="motherh" value="mother"> Mother
    </label></td>
     <td><label> <input type="checkbox" name="fatherh" value="father">  Father
    </label></td>
     <td><label> <input type="checkbox"name="siblingsh" value="siblings"> Siblings
    </label></td>
     <td><label> <input type="checkbox" name="grandparentsh" value="grandparents"> Grandparents
    </label></td>
     <td><label> <input type="checkbox" name="nilh" value="nil"> Nil
    </label></td></tr>
    <tr>
      
      <td><label > Marriage:</label></td>
      <td><label class="radio-inline">
  <input type="radio" name="marriage" value="consanguineous"  id="radio1" > Consanguineous
</label></td>
<td>
  <label>
    <input type="checkbox" name="firstd" value="1st degree" disabled id="ch1">
    1st Degree
  </label>

</td>
     <td>
  <label>
    <input type="checkbox" name="secondd" value="2nd degree" disabled id="ch2">
    2nd Degree
  </label>

</td>
     <td>
  <label>
    <input type="checkbox" name="thirdd" value="3rd degree" disabled id="ch3">
    3rd Degree
  </label>

</td></tr>
<tr><td class="col-sm-3"></td><td><label class="radio-inline">
  <input type="radio" name="marriage" value="non_consanguineous" id="radio2" value="option2"> Non Consanguineous
</label></td></tr>
<tr>
<td><label class="control-label"> Pets:</td>
  <td> 
<select class="form-control" name="pets" id="pets">
            <option value="Null">Select One</option>
            <option value ="Cat">Cat</option>
            <option value="Dog">Dog</option>
            <option value = "Hens">Hens</option>
            <option value = "Cow">Cow</option>
    </select>
</td>

</tr>

  
  </table>
  <table class="table">

 <tr>
        <td><label class="control-label"> Personal H/O:</label></td>
        <td><textarea class="form-control" rows="4" cols="50" name="personal_ho" placeholder="Type here.."required style=" resize:none;"></textarea></td> 
         </tr>
            <tr>
            <td><label class="control-label"> Clinical:</label></td>
        <td><textarea class="form-control" rows="4" cols="50" name="Clinical" placeholder="Type here.."required style=" resize:none;"></textarea></td> 
         </tr>
</table>
<table class="table">
    <tr>
<td><label class="control-label">HB:</label></td>
   <td> <input class="form-control" type="text" name="HB">
       </td>    
<td><label class="control-label">CBC:</label></td>
           <td><input class="form-control" type="text" name="CBC"></td>
         </tr>
         <tr>
           <td> <label class="control-label">Blood Group</label></td>
               <td><select class="form-control" role="menu" name="bgroup">
                   <option>Select Blood Group</option>
                      <option> O+ve</option>
                      <option>A+ve</option>
                   <option> B+ve</option>
                      <option>AB+ve</option>
                    <option> O-ve</option>
                      <option>A-ve</option>
                   <option> B-ve</option>
                      <option>AB-ve</option>
                   </select>           
                     </td>
               <td>
<label >HBs Ag:</label></td>
<td>
           <input class="form-control" type="text" name="HBs">
   </td></tr>  
   <tr>      
<td><label >HIV:</label>
   </td> <td>       <input class="form-control col-sm-5" type="text" name="HIV">
           </td>
           <td>
<label >Inj TT :</label>
           </td>
           <td><label> <input type="checkbox" name="first"  > 1 st
    </label> 
     <label> <input type="checkbox" name="second"  > 2 nd
    </label></td>
</tr>
<tr>
<td><label >LMP:</label>
</td><td>           <input class="form-control col-sm-5"  type="text" id="lmp2" name="LMP">
        </td>   
<td><label >EDD:</label>
</td><td>  <input class="form-control col-sm-5" type="text" name="EDD">
        </td>  
        </tr>
      </table>
      <table class="table">
        <tr><td class="col-sm-5"></td><td><input type="submit" class="btn btn-success" name="submit" value="Submit" >
        <input type="reset" class="btn btn-danger" name="submit" value="Cancel" ></td></tr> 
  </table>
   </div>
               </div>
     </div>
           </div>
     </div>
          
</form>
<script src="js/bootstrap.js">

</script>

</body>
</html>
 