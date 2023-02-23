<?php 
include('../dbconfig.php');
 extract($_POST);
  if(isset($_POST['search']))	{
  $n= $_POST['userName'];
}
?>

<?php
$q=mysqli_query($conn,"select * from contact");
$r=mysqli_num_rows($q);
if($r==false)
{
echo "<h3 style='color:Red'>No any records found ! </h3>";
}
else
{
?>


<?php
$con = mysqli_connect("localhost","root","","feedback_system");
$s=mysqli_query($con,"select DISTINCT name from contact");

?>

<script type="text/javascript">

function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
     	//id=7;
        window.location.href='delete_contact.php?id='+id;
     }
}
</script>		


<style type="text/css">
	tr:nth-child(even) {background-color: DodgerBlue;color: white;}
	tr:nth-child(odd) {color: blue;}
</style>


<!-- <div class="row">
	<div class="col-sm-12" style="color:orange;">
		<h1 align="center" style="color: blue;">Contact Us
			
		</h1>
	</div>
</div> -->

<form method="post" >
<table class="table table-hover">
<tr>
<!-- 	<td style="text-align: center;">Select Teacher Email</td> -->
    <td style="text-align: center;">
        <select name="userName" class="form-control">
           <option value="Select Name">Select Name</option>
	       <?php
	       while ($r=mysqli_fetch_array($s)) {
		   $name=$r['name'];
		   //echo 
		   ?>
		   <option value="<?php echo $name;  ?>"><?php echo $name;?></option>

	       <?php	
          	}
	       ?>
         </select>
    </td>



<!-- <td style="text-align: right;">Select Semester</td>
<td>
<select name="sem" class="form-control">
<option style="text-align: center;" value="Select Semester">Select Semester</option>
	
	<option value="i">i</option>
	<option value="ii">ii</option>
	
</select>
 -->
</td>
<td><input name="search" type="submit" value="search" class="btn btn-primary"/></td>
</tr>
</table>
</form>

<div class="row">

<div class="col-sm-12">

<?php
if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;

if(!empty($_POST['search'])){   
  if($_POST['userName']!='Select Name')
    {
    //echo $userName;
    $que=mysqli_query($conn,"select * from contact where name='$userName'");
    $total_pages_sql = "SELECT COUNT(*) FROM contact where name='$userName'";
   //echo $userName;
     }	
	
   if($_POST['userName']=='Select Name')
     {
     	$que=mysqli_query($conn,"select * from contact LIMIT $offset, $no_of_records_per_page");
     }
  }
  //if(empty($_POST['search']))
  	  //$que=mysqli_query($conn,"select * from feedback");

  if(empty($_POST['search'])){
  	$que=mysqli_query($conn,"select * from contact LIMIT $offset, $no_of_records_per_page");

        $total_pages_sql = "SELECT COUNT(*) FROM contact";
	    }
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>"; 

echo "<thead>";
echo "<tr class='success' style='color: blue;''>";
echo "<th>Sr.No</th>";		
echo "<th>User Name</th>";		
echo "<th>Email</th>";		
echo "<th>Mobile</th>";		
echo "<th>Message</th>";		
echo "<th>Delete</th>";		
echo "</tr>";		
echo "</thead>";		
		

		$i=1;
	while($row=mysqli_fetch_assoc($que))
		{
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['mobile']."</td>";
			echo "<td>".$row['message']."</td>";
			$id=$row['id'];
			//echo $id;
			echo "<td class='text-center'><a href='delete_contact.php?id=$id' ><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
			echo "</tr>";
		$i++;
		}
		
		?>
		
		
		
</table>


<?php
    $pagLink = "<ul class='pagination'>";  
          for ($i=1; $i<=$total_pages; $i++) {
       $pagLink .= "<li class='page-item'><a class='page-link' href='?info=contact&pageno=".$i."'>".$i."</a></li>";	
}
echo $pagLink . "</ul>";  
?>	
</div>
</div>
<?php }?>