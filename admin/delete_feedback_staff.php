<?php
include('../dbconfig.php');
	
	$info=$_GET['id'];

	$que=mysqli_query($conn,"select * from feedback_staff where id='$info'");
	while($row=mysqli_fetch_array($que))
	{	$sub0=$row[0];
		$sub1=$row[1];
		$sub2=$row[2];
        $sub3=$row[3];
        $sub4=$row[4];
        $sub5=$row[5];
        $sub6=$row[6];
        $sub7=$row[7];
        $sub8=$row[8];
        $sub9=$row[9];
        $sub10=$row[10];
        $sub11=$row[11];
        $sub12=$row[12];
        $sub13=$row[13];
        $sub14=$row[14];
        $sub15=$row[15];
        $sub16=$row[16];
      
		
		$query="insert into staff values('$sub0','$sub1','$sub2','$sub3','$sub4','$sub5','$sub6','$sub7','$sub8','$sub9','$sub10','$sub11','$sub12','$sub13','$sub14','$sub15','$sub16')";
       mysqli_query($conn,$query);

//$num=mysqli_query($conn,$query);


	}
	
	mysqli_query($conn,"delete from feedback_staff where id='$info'");
	header('location:dashboard.php?info=feedback_staff');
?>
