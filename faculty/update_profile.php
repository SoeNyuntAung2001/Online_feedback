<?php
	extract($_POST);


	if(isset($save))
	{	
	
	mysqli_query($conn,"update faculty set Name='$n',designation	='$desg',programme='$prg',semester='$sem',mobile='$mob',department='$dep',	password='$pass' where email='".$_SESSION['faculty']."'");	

$err="<font color='green'>Faculty Details updated</font>";

	}

$con=mysqli_query($conn,"select * from faculty where email='".$_SESSION['faculty']."'");

$res=mysqli_fetch_assoc($con);
//$res=mysqli_num_rows($con);
//print_r($res);
//echo $res;
?>


<!--<h3 class="page-header">Update Profile</h3>
--><div class="col-lg-8" style="margin:15px;background-color:  #66CCFF"">
	<form method="post">
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Name:</label>
            	<input type="text" value="<?php echo @$res['Name'];?>" name="n" class="form-control" required>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Designation:</label>
            	<input type="text" value="<?php echo @$res['designation'];?>" name="desg" class="form-control" required>
        </div>
   	</div>
 	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Email :</label>
            	<input type="email" value="<?php echo @$res['email'];?>"  name="email" readonly="true" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Password :</label>
          <input type="text" value="<?php echo @$res['password'];?>"  name="pass" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Subject:</label>
  <input type="text"  name="prg" value="<?php echo @$res['programme'];?>" class="form-control" required>
        </div>
    </div>
	
	<!-- <div class="control-group form-group">
    	<div class="controls">
        	<label>Semester</label> -->
			<div class="control-group form-group">
    	<div class="controls">
        	<label>Semester</label>
			<select  name="sem" class="form-control" required  >
					<option>Select Semester</option>
                 
				<option value="i" >i</option>
				<option value="ii" >ii</option>
						
   </select>

   </div>
    </div>
  <!-- <input type="text"  name="sem" value="")
                                                   echo "First Semester";
                                                  else if($users['semester']=="ii")
                                                   echo "Second Semester";?>" class="form-control" required>
        </div>
    </div> -->

    <div class="control-group form-group">
        <div class="controls">
            <label>Department:</label>
  <input type="text"  name="dep" value="<?php echo @$res['department'];?>" class="form-control" required>
        </div>
    </div>
                  
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Mobile Number:</label>
            	<input type="number" id="mob" value="<?php echo @$res['mobile'];?>" class="form-control" maxlength="10" name="mob"  required>
        </div>
  	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-primary" name="save" value="Update  Profile">
        </div>
  	</div>
	</form>
<?php
?>
</div>