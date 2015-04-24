<?php
include 'header.php';
echo $name=$_POST['name'];
echo $no=$_POST['no'];
$query = "select *from opd where no=".$no;
include 'DbConnect.php';
$result= mysql_query($query,$conn);
$row = mysql_fetch_assoc($result);




        echo "<table class='table'>
      <tr>
          <td><label class='control-label'>No:</label></td>
          <td> ".$row['no']."</td>
           

          <td> <label class='control-label' style='margin-left:50px;'>Date: </label></td>
          <td><input class='form-control' type='text'  name='date' value='".$row[date]."' disabled> 
           
            </td> 
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
     
echo $row['no']."<br>".$row['name'];
?>