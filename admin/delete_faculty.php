<?php
include('../dbconfig.php');
	
	$info=$_GET['id'];

	$que=mysqli_query($conn,"select * from faculty where id='$info'");
	while($row=mysqli_fetch_array($que))
	{	$id=$row['id'];
		$name=$row['Name'];
		$des=$row['designation'];
		$pro=$row['programme'];
		$sem=$row['semester'];
		$y=$row['year'];
		$sec=$row['section'];
		$dept=$row['department'];
		$email=$row['email'];
		$ph=$row['mobile'];
		//$date=now();
		$query="insert into teacher values('$id','$name','$des','$pro','$sem','$y','$sec','$dept','$email','$ph',	now())";
       mysqli_query($conn,$query);

//$num=mysqli_query($conn,$query);


	}
	
	mysqli_query($conn,"delete from faculty where id='$info'");
	header('location:dashboard.php?info=show_faculty');
?>