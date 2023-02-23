<?php 
include('../dbconfig.php');
 extract($_POST);
?>

<form method="post" >
<table class="table table-hover">
<tr>
	<td style="text-align: center;">Select Department</td>
    <td>
        <select name="faculty"  class="form-control">
          <option value="Select Faculty">Select Department</option>
	      <option value="Faculty of Computer Science">Faculty of Computer Science</option>
	      <option value="Faculty of Information Science">Faculty of Information Science</option>
        </select>
    </td>



<td style="text-align: right;">Select Semester</td>
<td>
<select name="sem" class="form-control">
<option style="text-align: center;" value="Select Semester">Select Semester</option>
	
	<option value="i">i</option>
	<option value="ii">ii</option>
	
</select>

</td>
<td><input name="search" type="submit" value="search" class="btn btn-primary"/></td>
</tr>
</table>
</form>

<?php
if(isset($_POST['search']))	{  
  if($_POST['faculty']!='Select Faculty' || $_POST['sem']!='Select Semester')
    {

    $que=mysqli_query($conn,"select * from faculty where semester='$sem' and department='$faculty'");
     }	
	
   if($_POST['faculty']=='Select Faculty' || $_POST['sem']=='Select Semester')
     {
     	$que=mysqli_query($conn,"select * from faculty");
     }

      echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr>";
	
	echo "<th>S.No</th>";
	echo "<th>Name</th>";
	echo "<th>Designation</th>";
	echo "<th>Programme</th>";
	echo "<th>Department</th>";
	echo "<th>Semester</th>";
	echo "<th>User Name</th>";	
	echo "<th>Email</th>";
	echo "<th>Mobile</th>";
	echo "<th>Password</th>";
	echo "<th>Update</th>";
	echo "<th>Delete</th>";
	//echo "<th>Status</th>";
	echo "</tr>";
     $i=1;
     while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['Name']."</td>";
		echo "<td>".$row['designation']."</td>";
		echo "<td>".$row['programme']."</td>";
		echo "<td>".$row['department']."</td>";
		echo "<td>".$row['semester']."</td>";
		echo "<td>".$row['user_alias']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['mobile']."</td>";
		echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=edit_faculty'><span class='glyphicon glyphicon-pencil'style=color:green;></span></a></td>";
		
		
		echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
		
		
		
		if($row['status'])
		{
		echo "<td><a href='update_status.php?user_id=".$row['id']."&status=".$row['status']."'><span class='glyphicon glyphicon-user' style=color:green;></span></a></td>";
		}
		else
		{
		echo "<td><a href='update_status.php?user_id=".$row['id']."&status=".$row['status']."'><span class='glyphicon glyphicon-user' style=color:green;></span></a></td>";
		}
		echo "</tr>";
		$i++;
	}
     	
   }

      //include('show_faculty.php');
      
   
 

?>




<style type="text/css">
	tr:nth-child(even) {background-color: DodgerBlue;color: white;}
	tr:nth-child(odd) {color: blue;}
</style>

<script type="text/javascript">



function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_faculty.php?id='+id;
     }
}
</script>	


<style type="text/css">
	tr:nth-child(even) {background-color: DodgerBlue;color: white;}
	tr:nth-child(odd) {color: blue;}

</style>



<?php

?>
</html>