
<?php
extract($_POST);
if(isset($sub))
{

// $user=$_SESSION['staff'];
// $user1=$_SESSION['teacher'];
// $user3=$_SESSION['student'];
// $uname=$user['email'];
// $uname1=$user1['email'];
// $uname2=$user2['gmail'];
// $y='';
// $s='';
// if($uname)
$email;
$query="insert into suggest values('','$email','$subjects','$sug')";
// elseif($uname1)
// $query="insert into suggest values('$uname1','$subjects','$suggest')";
// else
// $query="insert into suggest values('$uname2','$subjects','$suggest')";
// mysqli_query($conn,$query);

$num=mysqli_query($conn,$query);
if($num>=0)
{
echo "<h2 style='color:green; text-align: center;'>Feedback successful ! Thank you for your giving feedback!</h2>";
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th, td {
  padding: 10px;
}
.btn {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 13px 28px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.btn-primary {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.btn-primary:hover {
  background-color: #008CBA;
  color: white;
}

    </style>
</head>
<body>
<form method="post">
    <div style="margin-top:100px;" >
    <p align="center">Do you have any other comments,questions,or concerns?</p><br>
    <table align="center" padd>
<tr>
        <td>
            <label for="">To</label>
</td>
<td >   
            <input type="email" value="admin@gmail.com" style="width: 470px;height:40px;">
        </td>
</tr>
<tr>
        <td>
            <label for="">From</label>
</td>
<td >   
            <input type="email"  name="email" style="width: 470px;height:40px;"><br>
        </td>
</tr>

<tr>
        <td>
            <label for="">Subjects</label>
</td>
<td>   
            <input type="text" name="subjects" style="width: 470px;height:40px;">
        </td>
</tr>



<tr >
    <td colspan="2">
   
<textarea  rows="5" cols="60" id="comments" style="font-family:sans-serif;font-size:1.2em;" name="sug">

</textarea> 
    </td>
</tr>
    </table>


<p align="center"><button type="submit" class="btn btn-primary" name="sub">Submit</button>
<button type="reset" class="btn btn-primary" name="res">Cancel</button></p>
    </div>
    </form>
</body>
</html>

