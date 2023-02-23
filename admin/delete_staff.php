<?php
include('../dbconfig.php');
	
	$info=$_GET['id'];

	$que=mysqli_query($conn,"select * from staff where id='$info'");
	while($row=mysqli_fetch_array($que))
	{	$id=$row['id'];
		$name=$row['Name'];
		$age=$row['Age'];
		$jpos=$row['Job_Position'];
		$y=$row['year'];
		$psw=$row['password'];
		$dept=$row['department'];
		$email=$row['email'];
		$ph=$row['mobile'];
    $sdate = $row['start_date'];
    $status = $row['status'];
    $gender = $row['Gender'];
    $dob = $row['Date_Of_Birth'];
		//$date=now();
	// 	$query="insert into staff values('$id','$name','$age','$jpos','$y','$psw','$email','$dept','$sdate','$ph','$status','$gender','$dob',)";
    //    mysqli_query($conn,$query);

//$num=mysqli_query($conn,$query);


	}
	
	mysqli_query($conn,"delete from staff where id='$info'");
	header('location:dashboard.php?info=show_staff');
?>