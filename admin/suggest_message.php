<?php 
include('../dbconfig.php');
 extract($_POST);
  if(isset($_POST['search']))	{
  $n= $_POST['userName'];
}
?>

<!-- <html>
<head>
    <title>Pagination</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body> -->

<?php 
$q=mysqli_query($conn,"select * from suggest");
$r=mysqli_num_rows($q);
if($r==false)
{
echo "<h3 style='color:Red'>No any records found ! </h3>";
}
else
{
?>


<script type="text/javascript">
// function deletes(id)
// {
// 	a=confirm('Are You Sure To Remove This Record ?'+id);
// 	 if(a)
//      {
//         window.location.href='delete_suggest.php?id='+id;
//      }
// }
</script>

<style type="text/css">
	tr:nth-child(even) {background-color: DodgerBlue;color: white;}
	tr:nth-child(odd) {color: blue;}
</style>

<?php

$con = mysqli_connect("localhost","root","","feedback_system") or die("Error " . mysqli_error($link));
$s=mysqli_query($con,"select DISTINCT email from suggest");

?>

<form method="post" >
<table class="table table-hover">
<tr>
	<td style="text-align: center;">Select Email</td>
    <td style="text-align: center;">
        <select name="userName" class="form-control">
           <option value="Select Email">Select Email</option>
	       <?php
	       while ($r=mysqli_fetch_array($s)) {
		   $name=$r['email'];
		   //echo 
		   ?>
		   <option value="<?php echo $name;  ?>"><?php echo $name;?></option>

	       <?php	
          	}
	       ?>
         </select>
    </td>



<!-- <td style="text-align: right;">Select Semester</td>
<td>
<select name="sem" class="form-control">
<option style="text-align: center;" value="Select Semester">Select Semester</option>
	
	<option value="i">i</option>
	<option value="ii">ii</option>
	
</select>
 -->
</td>
<td><input name="search" type="submit" value="search" class="btn btn-primary"/></td>
</tr>
</table>
</form>

<?php
//     $pagLink = "<ul class='pagination'>";  
//           for ($i=1; $i<=$total_pages; $i++) {
//        $pagLink = "<li class='page-item'><a class='page-link' href='?info=show_faculty&pageno=".$i."'>".$i."</a></li>";	
// }
// echo $pagLink . "</ul>";  
?>



<div class="row">
	<div class="col-sm-12" style="color:orange;">
		<h1 align="center" style="color:blue;">All Suggest Messages</h1>
	</div>
</div>
<div class="row">

<div class="col-sm-12">

	<?php
if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;

if(!empty($_POST['search'])){   
  if($_POST['userName']!='Select Email')
    {

    $que=mysqli_query($conn,"select * from suggest where email='$userName'");
    $total_pages_sql = "SELECT COUNT(*) FROM suggest where email='$userName'";
   // echo $userName;
     }	
	
   if($_POST['userName']=='Select Email')
     {
     	$que=mysqli_query($conn,"select * from suggest LIMIT $offset, $no_of_records_per_page");
     }
  }
  //if(empty($_POST['search']))
  	  //$que=mysqli_query($conn,"select * from feedback");

  if(empty($_POST['search'])){
  	$que=mysqli_query($conn,"select * from suggest LIMIT $offset, $no_of_records_per_page");

        $total_pages_sql = "SELECT COUNT(*) FROM suggest";
        }
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

    echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";

	echo "<thead >";
	
	echo "<tr class='success'>";

	echo "<th>No</th>";	
	echo "<th>Email</th>";
    echo "<th>Title</th>";	
	echo "<th>Message</th>";	
	// echo "<th>Quest3</th>";	
	// echo "<th>Quest4</th>";	
	// echo "<th>Quest5</th>";	
	// echo "<th>Quest6</th>";
	// echo "<th>Quest7</th>";	
	// echo "<th>Quest8</th>";	
	// echo "<th>Quest9</th>";	
	// echo "<th>Quest10</th>";	
	// echo "<th>Quest11</th>";	
	// echo "<th>Quest12</th>";	
	// echo "<th>Quest13</th>";
    // echo "<th>Quest14</th>";
    // echo "<th>Quest15</th>";//echo "<th>Quest14</th>";	
	echo "</tr>";	
	echo "</thead>";	
		
	
		$i=1;
	while($row=mysqli_fetch_array($que))
		{
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row[1]."</td>";
			echo "<td>".$row[2]."</td>";
			echo "<td>".$row[3]."</td>";
			// echo "<td>".$row[4]."</td>";
			// echo "<td>".$row[5]."</td>";
			// echo "<td>".$row[6]."</td>";
			// echo "<td>".$row[7]."</td>";
			// echo "<td>".$row[8]."</td>";
			// echo "<td>".$row[9]."</td>";
			// echo "<td>".$row[10]."</td>";
			// echo "<td>".$row[11]."</td>";
			// echo "<td>".$row[12]."</td>";
			// echo "<td>".$row[13]."</td>";
			// echo "<td>".$row[14]."</td>";
			// echo "<td>".$row[15]."</td>";
            // echo "<td>".$row[16]."</td>";
           
			//echo "<td>".$row[16]."</td>";
			echo "<td><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
			echo "</tr>";
		$i++;
		}
		
		?>
		
	
		
</table>

<?php
    $pagLink = "<ul class='pagination'>";  
          for ($i=1; $i<=$total_pages; $i++) {
       $pagLink .= "<li class='page-item'><a class='page-link' href='?info=feedback&pageno=".$i."'>".$i."</a></li>";	
}
echo $pagLink . "</ul>";  
?>	
<script type="text/javascript">



function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_suggest.php?id='+id;
     }
	// window.location.replace("delete_suggest.php?id="+id);
}
</script>	



</div>
</div>
<?php }?>