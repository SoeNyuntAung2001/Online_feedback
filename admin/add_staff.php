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
		$dob=$yy."-".$mm."-".$dd;

		
	$n=mysqli_query($conn,"insert into staff values('','$name','$jobpos','$year','$dep','$email','$password','$mob',now(),'0','$gen','$dob')");
		
	 $subject ="New User Account Creation";
	 $from="info@phptpoint.com";
	 $message ="User name: ".$name." Password ".$password;
   $headers = "From:".$from;
   mail($email,$subject,$message,$headers);
	if($n>0)	
	$err="<font color='green'>New Staff Successfully Added.</font>";
	//header('location:dashboard.php?info=show_staff');
	}
}	

?>


<h1 class="page-header">Add Staff</h1>
<div class="col-lg-8" style="margin:15px;background-color: #66CCFF">
	<form method="post" >
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Name:</label>
            	<input type="text" value="<?php //echo @$name;?>" name="name" class="form-control" required>
        </div>
   	</div>
	
	<!-- <div class="control-group form-group">
    	<div class="controls">
        	<label>Age:</label>
            	<input type="text" value="<?php //echo @$age;?>" name="Age" class="form-control" required>
        </div>
   	</div> -->

   	<div class="control-group form-group">
    	<div class="controls">
        	<label>Job_Position:</label>
  <input type="text"  name="jobpos" value="<?php //echo @$jobpos;?>" class="form-control" required>
        </div>
    </div>
    <div class="control-group form-group">
    	<div class="controls">
        	<label>Year:</label>
  <input type="text"  name="year" value="<?php //echo @$year;?>" class="form-control" required>
        </div>
    </div>

    <div class="control-group form-group">
    	<div class="controls">
        	<label style="font-weight: bold;font-size: 1em">Gender:</label>&nbsp;
		
				Male<input type="radio" <?php if($res['Gender']=="m"){echo "checked";} ?> name="gen" value="m"/>
				Female<input type="radio" <?php if($res['Gender']=="f"){echo "checked";} ?> name="gen" value="f"/>	
  <!-- <input type="text"  name="Gender" value="<?php //echo @$gender;?>" class="form-control" required> -->
        </div>
    </div>

    <div class="control-group form-group">
    	<div class="controls">
        	<label>Date Of Birth:</label><br>
			<select style="width:100px;float:left" name="yy" class="form-control" required>
					<option value="">Year</option>
					<?php 
					for($i=1950;$i<=2016;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					<select style="width:100px;float:left" name="mm" class="form-control" required>
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
 					
					<select style="width:100px;float:left" name="dd" class="form-control" required>
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select><br><br>
  <!-- <input type="text"  name="dateofbirth" value="<?php //echo @$dob;?>" class="form-control" required> -->
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
					<option value="Admin">Admin</option>
					<option value="Student Affair">Student Affair</option>
					<option value="Finance">Student Affair</option>
					<option value="Library">Library</option>
						
   </select>

   </div>
    </div>

 
 	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Email :</label>
            	<input type="email"  name="email" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Password :</label>
            	<input type="password"   name="pass" class="form-control" required>
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
            	<input type="submit" class="btn btn-primary" name="save" value="Add New Staff">
        </div>
  	</div>
	</form>


</div>