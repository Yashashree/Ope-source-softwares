<?php
$formtype=$_GET['formtype'];
if($formtype=="null")
	die("Select form type.");

$f=$_GET['fromdate'];
$farr=split("/",$f);
$from=$farr[2]."-".$farr[0]."-".$farr[1]; 


$t=$_GET['todate'];
$tarr=split("/",$t);
$to=$tarr[2]."-".$tarr[0]."-".$tarr[1];

include 'DbConnect.php';
 	 $query="SELECT  no , name FROM ".$formtype." WHERE date >= '".$from."' AND date >= '".$to."'";

if($result=@mysql_query($query))
{}
else
{
	die("No Record found");
}

?>
 
<table class="table table-bordered table-hover">
<tr > 
<th>Case No</th>
<th>Name</th>
</tr>
<?php
while($row=@mysql_fetch_assoc($result))
 {
 	echo "<tr class='info'>";
echo '<td>';
	echo "<a href='searchcasepaper.php?no=";echo $row['no']; echo '&name=';echo $row['name'];echo "'>";echo $row['no'];echo ' </a>';
echo '</td>';
echo '<td>'.$row['name']."</td>"."</tr>"."<br>";
 }
?>
</table>
 