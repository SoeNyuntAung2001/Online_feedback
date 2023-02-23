<?php
include('../dbconfig.php');
	
	$info=$_GET['id'];
	//echo $info;
	mysqli_query($conn,"delete from contact where id='$info'");
	header('location:dashboard.php?info=contact');
?>