
<!--<?php 
//include('../dbconfig.php');
 //extract($_POST);
  //if(isset($_POST['search']))	{
  
  /* if($_POST['userName']=='Select Name')
     {
     	window.locatin.href('Testing2.php');
     }
     else*/
  //$n= $_POST['userName'];
       //echo "Testing".$n;
//}
?>-->
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


<!--<?php
//$con = mysqli_connect("localhost","root","","feedback_system");
//$s=mysqli_query($con,"select * from faculty");

?>-->


<!--<form method="post">-->
<!--<select name="userName">
	<option >Select Name</option>
	<?php
	//while ($r=mysqli_fetch_array($s)) {
		//$name=$r['Name'];
		?>
		<option value="<?php //echo $name;  ?>"><?php //echo $r['Name'];?></option>
	<?php	
	//}
	?>
</select>
<input type="submit" value="search" name="search" style="color: black;">
</form>

<?php
//if(isset($_POST['search']))	{
  
   //if($_POST['userName']!='Select Name')
     {
     	
     //}else{
     	//include('show_faculty.php');
     }
 //}
?>-->


<h2 style="text-align: center;color: blue;">Manage Faculty</h2>

	<!--<ul class="nav navbar-top-links navbar-right">-->
                <!-- /.dropdown -->
                <!--<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Search<i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li><a href="Testing2.php">SearchByName</a>
                        </li>
                        <li><a href="show_faculty.php?info=Testing2">SearchByDepartment</a>
                        </li>
                        <li><a href="show_faculty.php?info=Testing2">SearchBySemeter</a>
                        </li>
                    </ul>-->
                    <!-- /.dropdown-user -->
                <!--</li>-->
                <!-- /.dropdown -->
            <!--</ul>-->
	
<?php
	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr>";
	
	echo "<th>S.No</th>";
	echo "<th>Name</th>";
	echo "<th>Designation</th>";
	echo "<th>Programme</th>";
	echo "<th>Department</th>";
	echo "<th>Semester</th>";
	echo "<th>Year</th>";
	echo "<th>User Name</th>";	
	echo "<th>Email</th>";
	echo "<th>Mobile</th>";
	echo "<th>Password</th>";
	echo "<th>Update</th>";
	echo "<th>Delete</th>";
	echo "<th>Status</th>";
	echo "</tr>";
	
	$i=1;
	$que=mysqli_query($conn,"select * from faculty");
	
	while($row=mysqli_fetch_array($que))
		
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['Name']."</td>";
		echo "<td>".$row['designation']."</td>";
		echo "<td>".$row['programme']."</td>";
		echo "<td>".$row['department']."</td>";
		echo "<td>".$row['semester']."</td>";
		echo "<td>".$row['Class']."</td>";
		echo "<td>".$row['user_alias']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['mobile']."</td>";
		echo "<td>".$row['password']."</td>";
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
	
?>