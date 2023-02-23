<?php
error_reporting(1);
	include('../dbconfig.php');
	extract($_POST);
	$query=mysqli_query($conn,"select * from student;");
	while($r=mysqli_fetch_array($query))
	$row=$r['stuID'];
	$row+=1;
	//echo $row;
	if(isset($save))
	{	
		
	
 //    $q=mysqli_query($conn,"select * from student where gmail='$email'");
	// $r=mysqli_num_rows($q);	
	// if($r)
	// {
	// $err="<font color='red'>This email already exists choose diff email.</font>";
	// }
	// else
	// {
		//echo "Testing".$row.$sid.$name.$year.$section.$major.$email;

		$n=mysqli_query($conn,"insert into student values('$row','$name','$year','$section','$major','$email')");
		
	$subject ="New User Account Creation";
	$from="info@phptpoint.com";
	$message ="User name: ".$user_name." Password ".$pass;
    $headers = "From:".$from;
    mail($email,$subject,$message,$headers);
	 if($n>0)	
	$err="<font color='green'>New Student Successfully Added.</font>";
	//}
	}
//}	

?>


<h1 class="page-header">Add Student</h1>
<div class="col-lg-8" style="margin:15px;background-color: #66CCFF">
	<form method="post">
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>

<!--    		<div class="control-group form-group">
    	<div class="controls">
        	<label><?php //echo @$row;?></label>
        </div>
   	</div> -->

   	<div class="control-group form-group">
    	<div class="controls">
        	<label>Student ID:</label>
            	<input type="text" value="<?php echo @$row;?>" name="sid" class="form-control" required disabled>
        </div>
   	</div>
	
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Name:</label>
            	<input type="text" value="<?php //echo @$name;?>" name="name" class="form-control" required>
        </div>
   	</div>
	
    <div class="control-group form-group">
    	<div class="controls">
        	<label>Class</label><select name="year" class="form-control" id="year" required>
					<option>Select Academic Year</option>
					<option value="First Year">First Year</option>
					<option value="Second Year">Second Year</option>
					<option value="Third Year">Third Year</option>
					<option value="Fourth Year">Fourth Year</option>
					<option value="Fifth Year">Fifth Year</option>					
   </select>

   </div>
    </div>
<div class="control-group form-group">
    	<div class="controls">
        	<label>Section</label><select name="section" class="form-control" id="section" required >
					<option>Select Your Section</option>
					<option value="Section-A">Section-A</option>
					<option value="Section-B">Section-B</option>
					<option value="Section-C">Section-C</option>
					<option value="CT">CT</option>					
   </select>

   </div>
    </div>
<div class="control-group form-group">
    	<div class="controls">
        	<label>Major</label><select name="major" class="form-control" id="major" required >
					<option>Select Your Major</option>
					<option value="B.C.Sc">B.C.Sc</option>
					<option value="B.C.Tech">B.C.Tech</option>
				
   </select>

   </div>
    </div>

 
    	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Email :</label>
            	<input type="email" value="<?php //echo @$email;?>"  name="email" class="form-control" required>
        </div>
    </div>
	

	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-primary" name="save" value="Add New Student">
        </div>
  	</div>

	</form>


</div>