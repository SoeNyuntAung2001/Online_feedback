v
<?php 
include('../dbconfig.php');
 extract($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<body>

<form method="post" >
<table class="table table-hover">
<tr>
	<td style="text-align: center;">Select Programme</td>
    <td>
        <select name="pro"  class="form-control">
          <option value="Select Programme">Select Programme</option>
	      <option value="B.C.Sc">B.C.Sc</option>
	      <option value="B.C.Tech">B.C.Tech</option>
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
<td><input name="search" type="submit" value="search" class="btn btn-primary"/>
</td>
</tr>
</table>
</form>


<?php
$limit = 5;  
if (isset($_GET["page"])) {
	$page  = $_GET["page"]; 
	} 
	else{ 
	$page=1;
	};  
$start_from = ($page-1) * $limit;  


if(!empty($_POST['search']))	{

  if($_POST['pro']!='Select Programme' && $_POST['sem']!='Select Semester')
    {

   $que=mysqli_query($conn,"select * from user where programme='$pro' and semester='$sem'");
    
     }	
	
   if($_POST['pro']=='Select Programme' || $_POST['sem']=='Select Semester')
     {
     	$que=mysqli_query($conn,"select * from user");
     }
  }
  if(empty($_POST['search']))
  	$que=mysqli_query($conn,"select * from user LIMIT  $start_from, $limit");

   //pagination
       //  $total_pages_sql = "SELECT COUNT(*) FROM user";
      //  $result = mysqli_query($conn,$total_pages_sql);
        //$total_rows = mysqli_fetch_array($result)[0];
        //$total_pages = ceil($total_rows / $no_of_records_per_page);
        //$sql = "SELECT * FROM user LIMIT $offset, $no_of_records_per_page";
        //$res_data = mysqli_query($conn,$sql);
       
        

	
	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr class='success'>";
	
	echo "<th>S.No</th>";
	echo "<th>Name</th>";
	echo "<th>Email</th>";
	echo "<th>Mobile</th>";
	echo "<th>Programme</th>";
	echo "<th>Semester</th>";
	echo "<th>Regid Id</th>";
	echo "<th>Delete</th>";
	echo "</tr>";
	
	$i=1;
	//$que=mysqli_query($conn,"select * from user");
	 //while($row = mysqli_fetch_array($res_data)){
            //here goes the data
       // }
       // mysqli_close($conn);
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['mobile']."</td>";
		echo "<td>".$row['programme']."</td>";
		echo "<td>".$row['semester']."</td>";
		echo "<td>".$row['regid']."</td>";
		
		
		
		echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
		
		
		echo "</tr>";
		$i++;
	}
	
  

$result_db = mysqli_query($conn,"SELECT COUNT(*) FROM user"); 
$row_db = mysqli_fetch_row($result_db);  
$total_records = $row_db[0];  
$total_pages = ceil($total_records / $limit); 
/* echo  $total_pages; */
$pagLink = "<ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {
              $pagLink .= "<li class='page-item'><a class='page-link' href='pagination.php?page=".$i."'>".$i."</a></li>";	
}
echo $pagLink . "</ul>";  
?>
  </body>
</html>