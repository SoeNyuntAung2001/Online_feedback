
<?php 
//  global $i=1;
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
        <select name="staff"  class="form-control">
          <option value="Select Department">Select Department</option>
		  <option value="Admin">Admin</option>
	      <option value="Student Affair">Student Affair</option>
	      <option value="Accountant">Accountant</option>
          <option value="Library">Library</option>
	     
        </select>
    </td>



<!-- <td style="text-align: right;"></td> -->
<!-- <td>
<select name="sem" class="form-control">
<option style="text-align: center;" value="Select Semester">Select Semester</option>
	
	<option value="i">First Semester</option>
	<option value="ii">Second Semester</option>
	
</select>

</td> -->
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
  if($_POST['staff']!='Select Faculty' || $_POST['department']!='Select Department')
    {

    $que=mysqli_query($conn,"select * from staff where department='$staff'");
     $total_pages_sql = "SELECT COUNT(*) FROM staff where department='$staff'";
     }	
	
//    if($_POST['faculty']=='Select Faculty' || $_POST['sem']=='Select Semester')
//      {
//      	$que=mysqli_query($conn,"select * from faculty LIMIT $offset, $no_of_records_per_page");
//      	 $total_pages_sql = "SELECT COUNT(*) FROM faculty";
//      }
  }

  if(empty($_POST['search'])){
  	$que=mysqli_query($conn,"select * from staff LIMIT $offset, $no_of_records_per_page");

        $total_pages_sql = "SELECT COUNT(*) FROM staff";
    }
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
      echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr>";
	
	echo "<th>S.No</th>";
	echo "<th>Name</th>";
	// echo "<th>Age</th>";
	echo "<th>Job_Position</th>";
	echo "<th>Department</th>";
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
	
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['Name']."</td>";
		// echo "<td>".$row['Age']."</td>";
		echo "<td>".$row['Job_Position']."</td>";
		echo "<td>".$row['department']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['mobile']."</td>";
		echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=edit_staff'><span class='glyphicon glyphicon-pencil'style=color:green;></span></a></td>";
		
		
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

<?php
    $pagLink = "<ul class='pagination'>";
	// $j=1;  
          for ($i=1; $i<=$total_pages; $i++) {
			// $j++;
       $pagLink .= "<li class='page-item'><a class='page-link' href='?info=show_staff&pageno=".$i."'>".$i."</a></li>";	
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
        window.location.href='delete_staff.php?id='+id;
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


