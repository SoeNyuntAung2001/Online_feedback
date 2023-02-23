<?php
error_reporting(1);
	include('../dbconfig.php');
	extract($_POST);
	if(isset($save))
	{	
		if(strlen($mob)<10 || strlen($mob)>10)
		{
		$err="<font color='red'>Mobile number must be 10 digit</font>";
		}
		else
		{
		//for auto genrate Password
		/*
		$x=rand(1,99);
		$p= md5($x);
		$pass=substr($p,1,6);
		*/
		//for user_alias
		$temp=substr($name,0,4);
		$temp1=substr($mob,0,4);
		$user_name=$temp.$temp1;
		
	$n=mysqli_query($conn,"insert into faculty values('','$user_name','$name','$Designation','$prg','$sem','$year','$section','$dep','$email','$pass','$mob',now(),'0')");
		
	 $subject ="New User Account Creation";
	 $from="info@phptpoint.com";
	 $message ="User name: ".$user_name." Password ".$pass;
   $headers = "From:".$from;
   mail($email,$subject,$message,$headers);
	if($n>0)	
	$err="<font color='green'>New Faculty Successfully Added.</font>";
	
	}
}	

?>


<h1 class="page-header">Add Teacher</h1>
<div class="col-lg-8" style="margin:15px;background-color: #66CCFF">
	<form method="post">
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Name:</label>
            	<input type="text" name="name" class="form-control" required>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Designation:</label>
            	<input type="text" value="<?php //echo @$Designation;?>" name="Designation" class="form-control" required>
        </div>
   	</div>

   	<div class="control-group form-group">
    	<div class="controls">
        	<label>Subject:</label>
  <input type="text"  name="prg" value="<?php //echo @$prg;?>" class="form-control" required>
        </div>
    </div>

    <div class="control-group form-group">
    	<div class="controls">
        	<label>Semester</label>
  <select name="sem" class="form-control" required>
					<option>Select Semester</option>
					<option value="i">First Semester</option>
					<option value="ii">Second Semester</option>
					</select>
        </div>
    </div>

    <div class="control-group form-group">
    	<div class="controls">
        	<label>Year</label><select name="year" class="form-control" id="year" required >
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
					<option value="Section-C">Section-c</option>
					<option value="CT">CT</option>					
   </select>

   </div>
    </div>

 
    <!-- <div class="control-group form-group">
    	<div class="controls">
        	<label>Department:</label>
  <input type="text"  name="dep" value="<?php //echo @$dep;?>" class="form-control" required>
        </div>
    </div> -->

    <div class="control-group form-group">
    	<div class="controls">
        	<label>Department</label><select name="dep" class="form-control" id="dep" required >
					<option>Select Your Department</option>
					<option value="Faculty of Computer Science">Faculty of Computer Science</option>
					<option value="Faculty of Information Science">Faculty of Information Science</option>
					<option value="Faculty of Computer System and Technology">Faculty of Computer System and Technology</option>
					<option value="Information Technology Support and Maintenance Department">Information Technology Support and Maintenance Department</option>
					<option value="Faculty of Computational Mathematics">Faculty of Computational Mathematics</option>
					<option value="Department of Natural Sciences">Department of Natural Sciences</option>
					<option value="Department of Languages">Department of Languages</option>					
   </select>

   </div>
    </div>

 
 	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Email :</label>
            	<input type="email" value="<?php// echo @$email;?>"  name="email" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Password :</label>
            	<input type="password" value="<?php //echo @$pass;?>"  name="pass" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Mobile Number:</label>
            	<input type="number" id="mob" value="<?php //echo @$mob;?>" class="form-control" maxlength="10" name="mob"  required>
        </div>
  	</div>

	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-primary" name="save" value="Add New Teacher">
        </div>
  	</div>
	</form>


</div>