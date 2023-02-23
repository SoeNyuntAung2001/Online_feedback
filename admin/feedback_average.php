<form method="post">
<table class="table table-hover">
<tr>

<th style="text-align: center;"> Select Teacher</th>
<td>
<select name="faculty" class="form-control">
	<?php
	$sql=mysqli_query($conn,"select DISTINCT email,Name from faculty");
	echo "<option>"."Select Teacher"."</option>";
	while($r=mysqli_fetch_array($sql))
	{
	echo "<option value='".$r['email']."'>".$r['Name']."</option>";
	}
	
	?>

</select>
</td>
<td><input name="sub" type="submit" value="Check Average" class="btn btn-primary"/></td>
</tr>
</table>
</form>
<hr style="border:1px solid DodgerBlue"/>

<table style="border: 1px solid black" class="table">

	<thead >
	
	<tr style="background-color: #66CCFF">
		<th>Sr.No</th>
		<th>Student</th>
		<!--<th>Teacher</th>-->
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
		<th><span title="Like comment">Q13</span></th>
		<!-- <th><span title="Unlike comment">Quest14</span></th> -->
		<th>Date</th>
		<th>Year</th>
		<th>Section</th>
		</tr>
		</thead>


<?php
extract($_POST);
if(isset($sub))
{

	/*echo "<table style=border: 1px solid black class='table'>"

	echo "<thead >"
	
	echo "<tr style=background-color: #66CCFF>"
	echo "<th>Sr.No</th>"
	echo "<th>Student</th>"
   	echo "<th><span title='Teacher provided the course outline having weekly content plan with list of  required text book'>Quest1</span></th>"
	echo "<th><span title='Course objectives,learning outcomes and grading criteria are clear to me'>Quest2</span></th>"
	echo "<th><span title='Course integrates throretical course concepts with the real world examples'>Quest3</span></th>"
	echo "<th><span title='Teacher is punctual,arrives on time and leaves on time'>Quest4</span></th>"
	echo "<th><span title='Teacher is good at stimulating the interest in the course content'>Quest5</span></th>"
	echo "<th><span title='Teacher is good at explaining the subject matter'>Quest6</span></th>"
	echo "<th><span title='Teacher's presentation was clear,loud ad easy to understand'>Quest7</span></th>"
	echo "<th><span title='Teacher is good at using innovative teaching methods/ways'>Quest8</span></th>"
	echo "<th><span title='Teacher is available and helpful during counseling hours'>Quest9</span></th>"
	echo "<th><span title='Teacher has competed the whole course as per course outline'>Quest10</span></th>"
	echo "<th><span title='Teacher was always fair and impartial'>Quest11</span></th>"
	echo "<th><span title=Assessments conducted are clearly connected to maximize learining objectives'>Quest12</span></th>"
	echo 	"<th><span title='Like comment'>Quest13</span></th>"
	echo "<th><span title='Unlike comment'>Quest14</span></th>"
	echo "<th>Year</th>"
	echo "<th>Section</th>"
	echo "</tr>"
	echo "</thead>"
	echo "</table>"*/

//Count total Votes
$r=mysqli_query($conn,"select * from feedback where faculty_id='$faculty'");
$c=mysqli_num_rows($r);	
echo "<h4><b>Total Student Attempts : ".$c."</b></h4><br>";


		$i=1;
		$tmark=0;
		$avgmark=0;
		
	while($row=mysqli_fetch_array($r))
		{
			$name=$row[1];
			$que=mysqli_query($conn,"select * from user where name='$name'");     
            
            //$que=mysqli_query($conn,"select programme from faculty");
            //echo $que;
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row[1]."</td>";
			// echo $row[1];
			//echo "<td>".$row[2]."</td>";
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
			// echo "<td>".$row[15]."</td>";
			// echo $row[15];
			// echo $row[15];
			// if($row[15]==null)
			// echo "<td>4</td>";
			// else
			echo "<td>".$row[15]."</td>";
			echo "<td>".$row[16]."</td>";
			



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
echo "<b>";

			$tmark= $row[3]+$row[4]+$row[5]+$row[6]+$row[7]+$row[8]+$row[9]+$row[10]+$row[11]+$row[12]+$row[13]+$row[14];
			$avgmark+=$tmark/12;
			$avgmark=number_format($avgmark);

			
		$i++;
		}
		if($avgmark<=0)
		$avgmark=0;
		else
		$avgmark=number_format($avgmark/($i-1));
        
         //echo $r2;
				
	?>
		
</table>

<?php 

 


    echo  "<b>"."Average Mark : ".$avgmark."<br>"."<br>"."</b>";
if($avgmark==1)
	{echo "<b>"."The view of Students to this teacher is 'Strongly disagreed'"."</b>";}
else if($avgmark==2)
	{echo "<b>"."The view of Students to this teacher is 'Disagreed'"."</b>";}
else if($avgmark==3)
    {echo "<b>"."The view of Students to this teacher is 'Normal'"."</b>";}
else if($avgmark==4)
    {echo "<b>"."The view of Students to this teacher is 'Agreed'"."</b>";}
else if($avgmark==5)
    {echo "<b>"."The view of Students to this teacher is 'Strongly agreed'"."</b>";}


/*
$r1=mysqli_query($conn,"select * from feedback where faculty_id='$faculty'");
$c1=mysqli_fetch_assoc($r1);	
echo "<h4>Total Student Attempts : ".$c1[3]."</h4>";

*/

//question 1 start
error_reporting(1);
$q=mysqli_query($conn,"select  * from feedback where faculty_id='$faculty'");
while($res=mysqli_fetch_array($q))
{
	if($res[3]==5)
	{
	$stongly_agree++;
	} 
	else if($res[3]==4)
	{
	$agree++;
	}
	else if($res[3]==3)
	{
	$neutral++;
	}
	else if($res[3]==2)
	{
	$disagree++;
	}
	else if($res[3]==1)
	{
	$strongly_disagree++;
	}
	
}

//question 1 end
//question 2 start

$q2=mysqli_query($conn,"select * from feedback where faculty_id='$faculty'");
while($res=mysqli_fetch_array($q2))
{
	if($res[4]==5)
	{
	$stongly_agree1++;
	} 
	else if($res[4]==4)
	{
	$agree++;
	}
	else if($res[4]==3)
	{
	$neutral++;
	}
	else if($res[4]==2)
	{
	$disagree++;
	}
	else if($res[4]==1)
	{
	$strongly_disagree++;
	}
	
}
//question 2 end

//count 
$t=$stongly_agree+$stongly_agree1;
//echo "<h4>Strongly Agree Total Student : ".$t."</h4>";

mysqli_query($conn,"update feedback set avg='$t' where faculty_id='$faculty'");



$q=mysqli_query($conn,"select * from feedback where faculty_id='$faculty'");
		while ($res = mysqli_fetch_array($q)) {
			$count += $res[3];
			$count += $res[4];
			$count += $res[5];
			$count += $res[6];
			$count += $res[7];
			$count += $res[8];
			$count += $res[9];
			$count += $res[10];
			$count += $res[11];
			$count += $res[12];
			$count += $res[13];
			$count += $res[14];
			// $count += $res[15];
		}
		// echo $count;
}
?>

<style type="text/css">
	tr:nth-child(even) {background-color: #66CCFF;color: black;}
	tr:nth-child(odd) {color: black;}
</style>