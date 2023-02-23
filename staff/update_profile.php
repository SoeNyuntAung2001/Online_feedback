<?php 
// session_start();
extract($_POST);
if(isset($update))
{
//dob
// $dob=$yy."-".$mm."-".$dd;
// echo $dob;
//hobbies
// $job=implode(",",$job);
// echo $job;
$query="update staff set Name='$n',Job_Position='$job',mobile='$mob' where email='".$_SESSION['user']."'";

//$query="insert into user values('','$n','$e','$pass','$mob','$gen','$hob','$imageName','$dob',now())";
mysqli_query($conn,$query);



$err="<font color='blue'>Profie updated successfully !!</font>";
header('Location:'.$_SERVER['PHP_SELF']);

}
else
{
//select old data
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from staff where email='".$_SESSION['user']."'");
$res=mysqli_fetch_assoc($sql);
//  echo $res['email'];
?>
<h2 align="center">Update Your Profile</h2>

		<form method="post" >
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td style="font-weight: bold;font-size: 1.2em">Enter Your Name</td>
					<Td><input size="37" value="<?php echo $res['Name'];?>"  type="text" name="n" /></td>
				</tr>
				<tr>
					<td style="font-weight: bold;font-size: 1.2em">Enter Your Email </td>
					<Td><input size="37" type="email" readonly="true" value="<?php echo $res['email'];?>"  name="e"/></td>
				</tr>
		
				
				<tr>
					<td style="font-weight: bold;font-size: 1.2em">Enter Your Mobile </td>
					<Td><input size="37" type="text" value="<?php echo $res['mobile'];?>"  name="mob"/></td>
				</tr>
				
				<!-- <tr>
					<td style="font-weight: bold;font-size: 1.2em">Select Your Gender</td>
					<Td>
				Male<input type="radio" <?php if($res['Gender']=="m"){echo "checked";} ?> name="gen" value="m"/>
				Female<input type="radio" <?php if($res['Gender']=="f"){echo "checked";} ?> name="gen" value="f"/>	
					</td>
				</tr> -->
				
				<tr>
					<!-- <td >Choose Your Job_Position</td>
					<Td>
					<?php 
					//$arrr=explode(",",$res['Job_Position']);
					?>
					
					
					Security<input value="Security" <?php //if(in_array("security",$arrr)){echo "checked";} ?> type="checkbox" name="job[]"/>
					Accountant<input value="Accountant" <?php //if(in_array("accountant",$arrr)){echo "checked";} ?> type="checkbox" name="job[]"/>
					Archivist<input value="Archivist" <?php //if(in_array("archivist",$arrr)){echo "checked";} ?> type="checkbox" name="job[]"/>
					</td>
				</tr> -->

				
<td style="font-weight: bold;font-size: 1.2em" >Select Job Position</td>
<td  >
<select name="job"  class="control-group form-group">
<option style="text-align: center;" value="Select Job Position">Select Job Position</option>
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
</td>
</tr>		
				
		
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-primary" value="Update" name="update"/>
<input type="reset" class="btn btn-primary" value="Reset"/>
				
					</td>
				</tr>
			</table>
		</form>
	<?php } ?>