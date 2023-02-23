
<?php 
include('../dbconfig.php');
 extract($_POST);
?>

<!-- <html>
<head>
    <title>Pagination</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body> -->

<form method="post">
<table class="table table-hover">
<tr>
	<td style="text-align: center;">Select Department</td>
    <td>
        <select name="faculty"  class="form-control">
          <option value="Select Faculty">Select Department</option>
	      <option value="Faculty of Computer Science">Faculty of Computer Science</option>
	      <option value="Faculty of Information Science">Faculty of Information Science</option>
	      <option value="Faculty of Computer System and Technology">Faculty of Computer System and Technology</option>
		  <option value="Information Technology Support and Maintenance Department">Information Technology Support and Maintenance Department</option>
		  <option value="Faculty of Computational Mathematics">Faculty of Computational Mathematics</option>
		  <option value="Department of Natural Sciences">Department of Natural Sciences</option>
		  <option value="Department of Languages">Department of Languages</option>
        </select>
    </td>



<td style="text-align: right;">Select Semester</td>
<td>
<select name="sem" class="form-control">
<option style="text-align: center;" value="Select Semester">Select Semester</option>
	
	<option value="i">First Semester</option>
	<option value="ii">Second Semester</option>
	
</select>

</td>
<td><input name="search" type="submit" value="search" class="btn btn-primary"/></td>
</tr>
</table>
</form>

<?php
if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;

if(!empty($_POST['search'])){  
  if($_POST['faculty']!='Select Faculty' || $_POST['sem']!='Select Semester')
    {

    $que=mysqli_query($conn,"select * from faculty where semester='$sem' and department='$faculty'");
     $total_pages_sql = "SELECT COUNT(*) FROM faculty where semester='$sem' and department='$faculty'";
     }	
	
   if($_POST['faculty']=='Select Faculty' || $_POST['sem']=='Select Semester')
     {
     	$que=mysqli_query($conn,"select * from faculty LIMIT $offset, $no_of_records_per_page");
     	 $total_pages_sql = "SELECT COUNT(*) FROM faculty";
     }
  }

  if(empty($_POST['search'])){
  	$que=mysqli_query($conn,"select * from faculty LIMIT $offset, $no_of_records_per_page");

        $total_pages_sql = "SELECT COUNT(*) FROM faculty";
    }
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
		echo "<font style='font-size:12px;'>";
      echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:0px;>";
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
	//echo "<th>Password</th>";
	echo "<th>Update</th>";
	echo "<th>Delete</th>";
	echo "<th>Status</th>";
	echo "</tr>";
     $i=1;
     while($row=mysqli_fetch_array($que))
	{
		if($row['semester']=="i")
                         $row['semester']="First Semester";
                        else if($row['semester']=="ii")
                        $row['semester']="Second Semester";
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
     	
  // }

      //include('show_faculty.php');
      
   
 

?>
</table>
</font>
<?php
    $pagLink = "<ul class='pagination'>";  
          for ($i=1; $i<=$total_pages; $i++) {
       $pagLink .= "<li class='page-item'><a class='page-link' href='?info=show_faculty&pageno=".$i."'>".$i."</a></li>";	
}
echo $pagLink . "</ul>";  
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
<!-- </html> -->


