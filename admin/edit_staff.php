
<?php
extract($_POST);
if(isset($save))
{	
// echo $n;

$i=mysqli_query($conn,"update staff set Name='$n',Age='$age',Job_Position='$pos',year='$year',department='$dep',email='$email',password='$pass',mobile='$mob' where id='".$_GET['id']."'");	
if($i>0){
	include("show_staff.php");
$err="<font color='green'>Faculty Details updated</font>";
}

}
else
{
// header("location:dashboard.php?info=show_staff");

$con=mysqli_query($conn,"select * from staff where id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);
$id=$_GET['id'];
include("edit_staff_show.php");
// readdir("location:edit_staff_show.php&id=$id");	
?>

<h1 class="page-header">Update  Staff</h1>
<div class="col-lg-8" style="margin:15px;background-color: #66CCFF;">
	<form method="post" >
	
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
	
	<!-- <div class="control-group form-group">
    	<div class="controls">
        	<label>Age:</label>
            	<input type="text" value="<?php echo @$res['Age'];?>" name="age" class="form-control" required>
        </div>
   	</div> -->
 	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Email :</label>
            	<input type="email" value="<?php echo @$res['email'];?>"  name="email" class="form-control" required>
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
        	<label>Job Position:</label>
			<select name="pos"  class="form-control">
<option  value="Select Job Position">Select Job Position</option>
	<option value="Director">Director</option>
	<option value="Head Of Division">Head Of Division</option>
	<option value="Head Of Branch">Head Of Branch</option>
	<option value="Staff Officer">Staff Officer</option>
	<option value="Deputy Director">Deputy Director</option>
	<option value="Assistant Director">Assistant Director</option>
	<option value="Superintendent">Superintendent</option>
	<option value="Registrar">Registrar</option>
	<option value="Accountant1">Accountant1</option>
	<option value="Accountant2">Accountant2</option>
	<option value="Accountant3">Accountant3</option>
	<option value="Accountant4">Accountant4</option>
	<option value="Casher1">Casher1</option>
	<option value="Casher2">Casher2</option>
	<option value="Casher3">Casher3</option>
	<option value="Casher4">Casher4</option>
	<option value="Upper Clerk">Upper Clerk</option>
	<option value="Lower Clerk">Lower Clerk</option>
	<option value="Branch Clerk">Branch Clerk</option>
	<option value="Staff Assistant">Staff Assistant</option>
	
</select>
  <!-- <input type="text"  name="pos" value="<?php echo @$res['Job_Position'];?>" class="form-control" required> -->
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Year</label>
			
  <input type="text"  name="year" value="<?php echo @$res['year'];?>" class="form-control" required>
        </div>
    </div>
 
            
    <div class="control-group form-group">
    	<div class="controls">
        	<label>Department</label><select name="dep" value="<?php echo @$res['department'];?>" class="form-control" id="dep" required >
					<option>Select Your Department</option>
                    <option value="Admin">Admin</option>
					<option value="Student Affair">Student Affair</option>
					<option value="Finance">Finance</option>
						
   </select>

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
            	<input type="submit" class="btn btn-primary" name="save" value="Update Staff">
        </div>
  	</div>
	</form>


</div>
<?php } ?>