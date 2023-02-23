<?php 
if(isset($_POST['search']))
{
	$year=$_POST['txtyear'];
  	         
  	        $q=mysqli_query($conn,"select * from feedback where faculty_id='".$_SESSION['faculty']."' and year='$year'");


  	    }
else
$q=mysqli_query($conn,"select * from feedback where faculty_id='".$_SESSION['faculty']."'");

$r=mysqli_num_rows($q);
if($r==false)
{
echo "<h3 style='color:Red'>No any records found ! </h3>";
}
else
{
?>

<style type="text/css">
	tr:nth-child(even) {background-color: #66CCFF;color: black;}
	tr:nth-child(odd) {color: black;}
</style>

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


<!-- <div class="row">
	<div class="col-sm-12" style="color:orange;">
		<h1 align="center" style="color: blue">Feedback</h1>
	</div>
</div> -->
<form method="post">
<table class="table">
<tr>

<th style="text-align: center;"> Select Class</th>
<td>
<select name="txtyear" class="form-control">

	    <option>Select Class</option>
		<option value="First Year">First Year</option>
		<option value="Second Year">Second Year</option>
		<option value="Third Year">Third Year</option>
		<option value="Fourth Year">Fourth Year</option>
		<option value="Fifth Year">Fifth Year</option>	

</select>
</td>
<td><input name="search" type="submit" value="search" class="btn btn-primary"/></td>
</tr>
</table>
</form>
<div class="control-group form-group">
    	<div class="controls" style="font-weight:bold;">
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
    </div><br>
<!-- 
<div style="text-align: center;">
<form  method="post">
<table>
	<tr>-->
<!-- 	<td style="text-align: center;">Select Teacher Email</td> -->
   <!-- <td style="text-align: center;">
           <lable>Select Name</lable>
	</td>
	<td>
		<input type="text" name="txtyear" class="form-control">
    </td>
<td><input name="search" type="submit" value="search" class="btn btn-primary"/></td>
</tr>
</table>
</form>
</div> -->

<div class="row">

<div class="col-sm-12">
<!-- <form  method="post">
<table>
	<tr>-->
<!-- 	<td style="text-align: center;">Select Teacher Email</td> -->
    <!--<td style="text-align: center;">
           <lable>Select Name</lable>
	</td>
	<td>
		<input type="text" name="txtyear" class="form-control">
    </td>
<td><input name="search" type="submit" value="search" class="btn btn-primary"/></td>
</tr>
</table>
</form> -->
<table style="border: 1px solid black" class="table">

	<thead >
	
	<tr style="background-color: #66CCFF">
		<th>Sr.No</th>
		<!-- <th>Student</th>
		<th>Teacher</th> -->
		<th><span title="Teacher provided the course outline having weekly content plan with list of  required text book">Q1</span></th>
		<th><span title="Course objectives,learning outcomes and grading criteria are clear to me">Q2</span></th>
		<th><span title="Course integrates throretical course concepts with the real world examples">Q3</span></th>
		<th><span title="Teacher is punctual,arrives on time and leaves on time">Q4</span></th>
		<th><span title="Teacher is good at stimulating the interest in the course content">Q5</span></th>
		<th><span title="Teacher is good at explaining the subject matter">Q6</span></th>
		<th><span title="Teacher's presentation was clear,loud ad easy to understand">Q7</span></th>
		<th><span title="Teacher is good at using innovative teaching methods/ways">Q8</span></th>
		<th><span title="Teacher is available and helpful during counseling hours">Q9</span></th>
		<th><span title="Teacher has competed the whole course as per course outline">Q10</span></th>
		<th><span title="Teacher was always fair and impartial">Q11</span></th>
		<th><span title="Assessments conducted are clearly connected to maximize learining objectives">Q12</span></th>
		<th><span title="Like comment (or) Unlike comment">Q13</span></th>
		<!-- <th><span title="Unlike comment">Quest14</span></th> -->
		<!-- <th>Subject</th> -->
		<th>Year</th>
		<th>Section</th>
		</tr>
		</thead>
		
		<?php
		$i=1;
		$tmark=0;
		$avgmark=0;
		

            
		//$
	while($row=mysqli_fetch_array($q))
		{
			$name=$row[1];
			$que=mysqli_query($conn,"select * from user where name='$name'");     
            
            //$que=mysqli_query($conn,"select programme from faculty");
            //echo $que;
			echo "<tr>";
			echo "<td>".$i."</td>";
			/*echo "<td>".$row[1]."</td>";
			echo "<td>".$row[2]."</td>";*/
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
            //if(isset($row[15]))
			echo "<td>".$row[15]."</td>";
		   // else
		   // echo "<td>"."-"."</td>";
		   //if(isset($row[16]))
			//echo "<td>".$row[16]."</td>";
		  // else
		   // echo "<td>"."-"."</td>";



			while($row1=mysqli_fetch_array($que)){
                
			echo "<td>".$row1[6]."</td>";
			echo "<td>".$row1[7]."</td>";
			$year=$row1[6];
			$section=$row1[7];
	$num=mysqli_query($conn,"update feedback set year='$year',section='$section' where student_id='$name'");
    //if($num>0)
    //	 echo "successful";

		}

echo "</tr>";

			$tmark= $row[3]+$row[4]+$row[5]+$row[6]+$row[7]+$row[8]+$row[9]+$row[10]+$row[11]+$row[12]+$row[13]+$row[14];
			$avgmark+=$tmark/12;
			$avgmark=number_format($avgmark);

			
		$i++;
		}
		$avgmark=number_format($avgmark/($i-1));
         
         echo $r2;
		/*echo "Average Mark:".$avgmark;
		
        if($avgmark==1)
	       {echo "The view of students to this teacher is 'Strongly disagreed'";}
        else if($average==2)
	       {echo "The view of students to this teacher is 'Disagreed'";}
        else if($avgmark==3) 
	       {echo "<b>"."The view of students to this teacher is 'Normal'"."</b>";}*/
		
	?>
		
</table>

<!--<input type="submit" value="Check Average" name="save" class="btn btn-primary"/>
-->
<!-- <?php

//$tmark1=0;
//$tmark2=0;
//$tmark3=0;
//$tmark4=0;
//$tmark5=0;
//$tmark6=0;
//$tmark7=0;
//$tmark8=0;
//$tmark9=0;
//$tmark10=0;
//$tmark11=0;
//$tmark12=0;

//$i1=1;

//if (isset($save)){

	//while($row=mysqli_fetch_array($q)){

		//$tmark1+=$row[3];
		//$tmark2+=$row[4];
		//$tmark3+=$row[5];
		//$tmark4+=$row[6];
		//$tmark5+=$row[7];
		//$tmark6+=$row[8];
		//$tmark7+=$row[9];
		//$tmark8+=$row[10];
		//$tmark9+=$row[11];
		//$tmark10+=$row[12];
		//$tmark11+=$row[13];
		//$tmark12+=$row[14];

		//$i1++;

	//}

	//$tmark1=number_format($tmark1/($i1-1));
	//$tmark2=number_format($tmark2/($i1-1));
	//$tmark3=number_format($tmark3/($i1-1));
	//$tmark4=number_format($tmark4/($i1-1));
	//$tmark5=number_format($tmark5/($i1-1));
	//$tmark6=number_format($tmark6/($i1-1));
	//$tmark7=number_format($tmark7/($i1-1));
	//$tmark8=number_format($tmark8/($i1-1));
	//$tmark9=number_format($tmark9/($i1-1));
	//$tmark10=number_format($tmark10/($i1-1));
	//$tmark11=number_format($tmark11/($i1-1));
	//$tmark12=number_format($tmark12/($i1-1));

//echo "Question 1 Average Mark : ".$tmark1;
//echo "Question 2 Average Mark : ".$tmark2;
//echo "Question 3 Average Mark : ".$tmark3;
//echo "Question 4 Average Mark : ".$tmark4;
//echo "Question 5 Average Mark : ".$tmark5;
//echo "Question 6 Average Mark : ".$tmark6;
//echo "Question 7 Average Mark : ".$tmark7;
//echo "Question 8 Average Mark : ".$tmark8;
//echo "Question 9 Average Mark : ".$tmark9;
//echo "Question 10 Average Mark : ".$tmark10;
//echo "Question 11 Average Mark : ".$tmark11;
//echo "Question 12 Average Mark : ".$tmark12;
}

?> -->

 
 
<!-- <h1 style="color: #0000FF">Average Mark</h1> -->
<?php 

 


    echo  "<b>"."Average Mark : ".$avgmark."<br>"."<br>"."</b>";
if($avgmark==1)
	{echo "<b>"."The view of Students to this teacher is 'Strongly disagreed'"."</b>";}
else if($average==2)
	{echo "<b>"."The view of Students to this teacher is 'Disagreed'"."</b>";}
else if($avgmark==3)
    {echo "<b>"."The view of Students to this teacher is 'Normal'"."</b>";}
else if($avgmark==4)
    {echo "<b>"."The view of Students to this teacher is 'Agreed'"."</b>";}
else if($avgmark==5)
    {echo "<b>"."The view of Students to this teacher is 'Strongly agreed'"."</b>";}

?>

</div> 
</div>
