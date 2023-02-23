<?php 
include('../dbconfig.php');
 extract($_POST);
  if(isset($_POST['search']))	{
  $n= $_POST['userName'];
}
?>
<!-- 
<html>
<head>
    <title>Pagination</title>
    Bootstrap CDN
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head> -->
<body>

<?php 
$q=mysqli_query($conn,"select * from feedback");
$r=mysqli_num_rows($q);
if($r==false)
{
echo "<h3 style='color:Red'>No any records found ! </h3>";
}
else
{
?>

<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_feedback.php?id='+id;
     }
}
</script>


<style type="text/css">
	tr:nth-child(even) {background-color: DodgerBlue;color: white;}
	tr:nth-child(odd) {color: blue;}
</style>

<?php
$con = mysqli_connect("localhost","root","","feedback_system");
$s=mysqli_query($con,"select DISTINCT faculty_id from feedback");

?>

<form method="post" >
<table class="table table-hover">
<tr>
<!-- 	<td style="text-align: center;">Select Teacher Email</td> -->
    <td style="text-align: center;">
        <select name="userName" class="form-control">
           <option value="Select Teacher Email">Select Teacher Email</option>
	       <?php
	       while ($r=mysqli_fetch_array($s)) {
		   $name=$r['faculty_id'];
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
<div class="control-group form-group">
    	<div class="controls">
        	<label>View Questions:</label>
			<select name="pos"  class="form-control">
<option  value="Select Job Position">Q1:Teacher provided the course outline having weekly content plan with list of required text book.</option>
	<option value="Director">Q2:Course objectives, learning outcomes and grading criteria are clear to me. </option>
	<option value="Head Of Division">Q3:Course integrates theoretical course concepts with the real world examples.</option>
	<option value="Head Of Branch">Q4:Teacher is punctual, arrives on time and leaves on time.</option>
	<option value="Staff Officer">Q5:Teacher is good at stimulating the interest in the course content.</option>
	<option value="Deputy Director">Q6:Teacher is good at explaining the subject matter. </option>
	<option value="Assistant Director">Q7:Teacher’s presentation was clear, loud and easy to understand.</option>
	<option value="Superintendent">Q8:Teacher is good at using innovative teaching methods/ways.</option>
	<option value="Registrar">Q9:Teacher is available and helpful during counseling hours.</option>
	<option value="Accountant1">Q10:Teachers has completed the whole course as per course outline.</option>
	<option value="Accountant3">Q11:Teacher was always fair and impartial</option>
	<option value="Accountant4">Q12:Assessments conducted are clearly connected to maximize learning objectives.</option>
	<option value="Casher1">Q13:Why I liked (or) unlike about the course. </option>
	
</select>
  <!-- <input type="text"  name="pos" value="<?php echo @$res['Job_Position'];?>" class="form-control" required> -->
        </div>
    </div>
<!-- <?php
    //$pagLink = "<ul class='pagination'>";  
          //for ($i=1; $i<=$total_pages; $i++) {
       //$pagLink .= "<li class='page-item'><a class='page-link' href='?info=show_faculty&pageno=".$i."'>".$i."</a></li>";	
//}
//echo $pagLink . "</ul>";  
?> -->



<!-- <div class="row">
	<div class="col-sm-12" style="color:orange;">
		<h1 align="center" style="color:blue;">Feedback</h1>
	</div>
</div> -->
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
  if($_POST['userName']!='Select Teacher Email')
    {

    $que=mysqli_query($conn,"select * from feedback where faculty_id='$userName'");
    $total_pages_sql = "SELECT COUNT(*) FROM feedback where faculty_id='$userName'";
   // echo $userName;
     }	
	
   if($_POST['userName']=='Select Teacher Email')
     {
     	$que=mysqli_query($conn,"select * from feedback LIMIT $offset, $no_of_records_per_page");
     }
  }
  //if(empty($_POST['search']))
  	  //$que=mysqli_query($conn,"select * from feedback");

  if(empty($_POST['search'])){
  	$que=mysqli_query($conn,"select * from feedback LIMIT $offset, $no_of_records_per_page");

        $total_pages_sql = "SELECT COUNT(*) FROM feedback";
        }
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
		echo "<font style='font-size:12px;'>";
    echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";

	echo "<thead >";
	
	echo "<tr class='success'>";

	echo "<th>Sr.No</th>";
	echo "<th>Student</th>";	
	echo "<th>Teacher</th>";	
	echo "<th>Q1</th>";	
	echo "<th>Q2</th>";	
	echo "<th>Q3</th>";	
	echo "<th>Q4</th>";	
	echo "<th>Q5</th>";	
	echo "<th>Q6</th>";
	echo "<th>Q7</th>";	
	echo "<th>Q8</th>";	
	echo "<th>Q9</th>";	
	echo "<th>Q10</th>";	
	echo "<th>Q11</th>";	
	echo "<th>Q12</th>";	
	echo "<th>Q13</th>";	
	echo "<th>Date</th>";	
	echo "<th>Delete</th>";
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
			echo "<td>".$row[4]."</td>";
			echo "<td>".$row[5]."</td>";
			echo "<td>".$row[6]."</td>";
			echo "<td>".$row[7]."</td>";
			echo "<td>".$row[8]."</td>";
			echo "<td>".$row[9]."</td>";
			echo "<td>".$row[10]."</td>";
			echo "<td>".$row[11]."</td>";
			echo "<td>".$row[12]."</td>";
			echo "<td>".$row[13]."</td>";
			echo "<td>".$row[14]."</td>";
			echo "<td>".$row[15]."</td>";
			echo "<td>".$row[16]."</td>";
			echo "<td><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
			echo "</tr>";
		$i++;
		}
		
		?>
		
	
		
</table>
	</font>
<?php
    $pagLink = "<ul class='pagination'>";  
          for ($i=1; $i<=$total_pages; $i++) {
       $pagLink .= "<li class='page-item'><a class='page-link' href='?info=feedback&pageno=".$i."'>".$i."</a></li>";	
}
echo $pagLink . "</ul>";  
?>	
</div>
</div>
<?php }?>