
<?php
include 'a_header.html';
?>
<section id="main-content">
<section class="wrapper">

    <div class="row">
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     

<form action="" method="post">
 
   <table style="background-color:black;border-style:groove; height:150px;width:650px" background="backimage.jpg">
            <tr>
                <td style=" height:25px; font-family:'Copperplate Gothic Bold'">&nbsp;</td>
            </tr>
            <tr>
                <td style="color:black;height:25px;background-color:white;">Enter Search_item:
                    <input name="xac"  type="text" style="color:black;width:450px;"/></td>
            </tr>


            <tr>
                <td style="height:25px">
                           <input type="submit" value="Search" style="color:white; height:30px background-color:blue" /></td>

            </tr>



        </table>
</form>


<table style="background-image:url('starfield-002501-faded-burgundy-gold.jpg'); " id="myTableData" border="2" >
	  <tr align="center" height="30px" bgcolor="white">
	        		<td><font face="verdana" color="black" size="3"><b>Book_id</td>
			<td><font face="verdana" color="black" size="3"><b>Book_name</td>
			<td><font face="verdana" color="black" size="3"><b>Author_name</td>
	       		<td><font face="verdana" color="black" size="3"><b>Price</td>
	        		<td><font face="verdana" color="black" size="3"><b>Quantity</td> </tr>


<?php
// connect to the "tests" database
$conn = new mysqli('localhost', 'root', '', 'book_shop');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

@$name = $_POST['xac'];       
   // sets the name in a variable



$sql = "SELECT `Book_id`, `Book_name`,`Author_name`,`Price`,`Quantity` FROM `computer` WHERE 
`Book_name`LIKE '%" .mysql_real_escape_string($name). "%' or 
`Author_name`LIKE '%" .mysql_real_escape_string($name). "%' "   ;


// perform the query and store the result
$result = $conn->query($sql);


// if the $result contains at least one row
if ($result->num_rows > 0  ) {
  // output data of each row from $result

  while($row = $result->fetch_assoc()) {
    echo '<tr><td><font face="verdana"  size="2">'.$row['Book_id'].'</td> 
		<td><font face="verdana" size="2">'.$row['Book_name'].'</td>
		<td><font face="verdana"  size="2">'.$row['Author_name'].'</td>
		<td><font face="verdana"  size="2">'.$row['Price'].'</td>
		<td><font face="verdana"  size="2">'.$row['Quantity'].'</td>
		</tr>';
  }

}

else {
  echo 'No records present';
}





$conn->close();
?>


</div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
              </table> 
    </div>

             <!-- /. PAGE INNER  -->
            </div>
    

</div>
</section>
</section>
</section>
<?php
include 'a_footer.php';
?>