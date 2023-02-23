
<?php
include('../dbconfig.php');
	
	$info=$_GET['id'];

	$que=mysqli_query($conn,"select * from suggest where id='$info'");
	while($row=mysqli_fetch_array($que))
	{	$id=$row['id'];
		$email=$row['email'];
		$sub=$row['subject'];
		$sug=$row['suggest'];
		// $sem=$row['semester'];
		// $y=$row['year'];
		// $sec=$row['section'];
		// $dept=$row['department'];
		// $email=$row['email'];
		// $ph=$row['mobile'];
		//$date=now();
		$query="insert into suggest values('$id','$email','$sub','$sug')";
       mysqli_query($conn,$query);

//$num=mysqli_query($conn,$query);


	}
	
	mysqli_query($conn,"delete from suggest where id='$info'");
	header('location:dashboard.php?info=suggest_message');
?>