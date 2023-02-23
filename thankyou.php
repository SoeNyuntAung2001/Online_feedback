<?php 
$conn = mysqli_connect("localhost","root","","feedback_system") or die("Error " . mysqli_error($link));
extract($_POST);
if(isset($save))
{
$e=$_POST['e'];
$pro=$_POST['pro'];
$section=$_POST['cname'];
$className=$_POST['classname'];
$q=mysqli_query($conn,"select * from student where gmail='$e' and major='$pro' and class_name='$section' and class='$className'");
$row=mysqli_num_rows($q);

if($row==true){
  
//check user alereay exists or not
     $sql=mysqli_query($conn,"select * from user where email='$e'");
     $r=mysqli_num_rows($sql); 
      if($r==true)
      {
     //  $err= "<font color='red'><h3 align='center'>This user already exists</h3></font>";
      }
     else
      {
//dob
       $dob=$yy."-".$mm."-".$dd;

//hobbies
       $hob=implode(",",$hob);

       $interest=implode(",", $interest);

//image
       $imageName=$_FILES['img']['name'];


//encrypt your password
        $pass=$p;


$query="insert into user values('','$n','$e','$pass','$mob','$pro','$classname','$cname','$sem','$gen','$hob','$interest','$imageName','$dob',now())";
 mysqli_query($conn,$query);

//upload image

mkdir("images/$e");
move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);

$err="<font color='blue'><h3 align='center'>Registration successfull !!<h3></font>";
header('location:user');
}
}
}
//}
//else{
//   $err="<font color='blue'><h3 align='center'>This Student's data is not occur in records!Registration Failed!<h3></font>";
  
// }

?>