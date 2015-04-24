<?php
if(isset($_GET['caseno']))
    $caseno=$_GET['caseno'];
    include 'DbConnect.php';
     $query="select name,address,age from opd where no =  ".$caseno;
     $result=@mysql_query($query,$conn);
     $row = @mysql_num_rows($result);
     $queryrow = @mysql_fetch_assoc($result);

      $name = $queryrow['name'];
      $address = $queryrow['address'];
     $age = $queryrow['age'];
      



echo "<table> 
      <tr>
           <td class='col-sm-2'><label class='control-label'>Name:</label></td>
           <td><input class='form-control' type='text' name='patientname' value='".$name."'></td>
           <td class='col-sm-1'> </td><td><label class='control-label'>Age:</label></td>
           <td class='col-sm-1'></td><td><input class='form-control' type='number'  name='age' value='".$age."'></td>
    </tr>
    </table>";

             echo " <table class='table'>
           <tr><td><label class='control-label col-sm-4'>Address:</label></td>";
           echo "<td><textarea class='form-control' rows='4' cols='40' placeholder='Type your address here..' name='address' value=''>".$address."
 
</textarea>"; 
 
echo "</td></tr>";
echo "</table>";

 ?>