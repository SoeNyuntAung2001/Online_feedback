<?php 
include('../dbconfig.php');
 extract($_POST);
 /*if(isset($_POST['search']))	{
  $n= $_POST['userName'];
}*/
?>
<!-- <html>
<head>
    <title>Pagination</title>
    Bootstrap CDN
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body> -->
 

<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_student.php?id='+id;
     }
}
</script>

<style type="text/css">
	tr:nth-child(even) {background-color: DodgerBlue;color: white;}
	tr:nth-child(odd) {color: blue;}
</style>


<!--<h2 style="text-align: center;color: blue;">Manage Student</h2>-->


<form method="post" >
<table class="table table-hover">

<!-- <tr>
	<td style="text-align: center;">
        <select name="userName" class="form-control">
           <option value="Select Name">Select Name</option>
	       <?php
	      // while ($r=mysqli_fetch_array($s)) {
		  // $name=$r['name'];
		   //echo 
		   ?>
		   <option value="<?php //echo $name;  ?>"><?php //echo $name;?></option>

	       <?php	
          	//}
	       ?>
         </select>
    </td> -->

</td>
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
	
	<option value="i">First Semester</option>
	<option value="ii">Second Semester</option>
	
</select>

</td>
<td><input name="search" type="submit" value="search" class="btn btn-primary"/>

<!-- <td style="text-align: center;">
        <select name="userName" class="form-control">
           <option value="Select Name">Select Name</option>
	       <?php
	       //while ($r=mysqli_fetch_array($s)) {
		   //$name=$r['name'];
		   //echo 
		   ?>
		   <option value="<?php //echo $name;  ?>"><?php //echo $name;?></option>

	       <?php	
          	//}
	       ?>
         </select>
    </td>
<td><input name="search" type="submit" value="search" class="btn btn-primary"/>
</td> -->
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

if(!empty($_POST['search']))	{

  if($_POST['pro']!='Select Programme' || $_POST['sem']!='Select Semester')
    {

   $que=mysqli_query($conn,"select * from user where programme='$pro' and semester='$sem' LIMIT $offset, $no_of_records_per_page");

   $total_pages_sql = "SELECT COUNT(*) FROM user where programme='$pro' and semester='$sem'";
    
     }	
	
   if($_POST['pro']=='Select Programme' || $_POST['sem']=='Select Semester')
     {
     	$que=mysqli_query($conn,"select * from user LIMIT $offset, $no_of_records_per_page");
     }
  }
  if(empty($_POST['search'])){
  	$que=mysqli_query($conn,"select * from user LIMIT $offset, $no_of_records_per_page");

        $total_pages_sql = "SELECT COUNT(*) FROM user";
    }
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
       // $sql = "SELECT * FROM user LIMIT $offset, $no_of_records_per_page";
       // $res_data = mysqli_query($conn,$sql);
	
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
	//$que=mysqli_query($conn,"select * from user ");
	
	while($row=mysqli_fetch_array($que))
	{
		if($row['semester']=="i")
                         $row['semester']="First Semester";
                        else if($row['semester']=="ii")
                        $row['semester']="Second Semester";
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
	
?>
</table>
	
<?php
    $pagLink = "<ul class='pagination'>";  
          for ($i=1; $i<=$total_pages; $i++) {
       $pagLink .= "<li class='page-item'><a class='page-link' href='?info=display_student&pageno=".$i."'>".$i."</a></li>";	
}
echo $pagLink . "</ul>";  
?>		