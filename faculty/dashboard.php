<?php
session_start();
include('../dbconfig.php');
error_reporting(1);

$user= $_SESSION['faculty'];
if($user=="")
{
  header('location:../index.php');
}



$sql=mysqli_query($conn,"select * from faculty where email='$user' ");
$users=mysqli_fetch_assoc($sql);

$num1=mysqli_query($conn,"select DISTINCT Name from faculty where email='$user'");
$USER=mysqli_fetch_assoc($num1);

$num2=mysqli_query($conn,"select DISTINCT designation from faculty where email='$user'");
$USER1=mysqli_fetch_assoc($num2);

$num3=mysqli_query($conn,"select DISTINCT department from faculty where email='$user'");
$USER2=mysqli_fetch_assoc($num3);

$num4=mysqli_query($conn,"select DISTINCT email from faculty where email='$user'");
$USER3=mysqli_fetch_assoc($num4);

$num4=mysqli_query($conn,"select DISTINCT year from faculty where email='$user'");

//$row2=mysqli_fetch_array($sql)

$arr[]=array();
$j=0;
while( $row2=mysqli_fetch_array($num4)){

    $arr[$j]=$row2['year'];
    echo $arr[$j].",";
    $j++;
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Faculty feedback System</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="background-color: #DCDCDC">

    <nav class="navbar navbar-inverse navbar-fixed-top" style="background:blue">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" style="color:#FFFFFF" href="#">Hello <?php echo $users['Name'];?></a>
          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="logout.php"  style="color:#FFFFFF">Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar" style="background-color: #DCDCDC;border-right: thin solid black;">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="dashboard.php" style="background-color:blue;">Dashboard <span class="sr-only">(current)</span></a></li>
      <!-- find users' image if image not found then show dummy image -->
      
      <!-- check users profile image -->
      <?php 
      $q=mysqli_query($conn,"select image from user where email='".$_SESSION['faculty']."'");
      $row=mysqli_fetch_assoc($q);
      if($row['image']=="")
      {
      ?>
            <li><a href="#"><img style="border-radius:50px" src="Teacher1.png" width="100" height="100" alt="not found"/></a></li>
      <?php 
      }
      else
      {
      ?>
      <li><a href="#"><img style="border-radius:50px" src="../images/<?php echo $_SESSION['faculty'];?>/<?php echo $row['image'];?>" width="100" height="100" alt="not found"/></a></li>
      <?php 
      }
      ?>
      
      
      
      <li><a href="?page=update_password"><span class="glyphicon glyphicon-user"></span> Update Password</a></li>

      <li><a href="?page=update_profile"><span class="glyphicon glyphicon-asterisk"></span> Update Profile</a></li>

       <li><a href="?page=feedback"><span class="glyphicon glyphicon-thumbs-up"></span> Feedback</a></li>
            
          </ul>
         
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- container-->
      <?php 
    @$page=  $_GET['page'];
      if($page!="")
      {
        if($page=="update_password")
      {
        include('update_password.php');
      
      }
      
        if($page=="update_profile")
      {
        include('update_profile.php');
      
      }
      if($page=="feedback")
      {
        include('feedback.php');
      
      }
      }
      else
      {
      
      ?>
  <!-- <?php

  // echo "<table class='table table-responsive table-striped table-hover' style=margin:15px;>";
  // echo "<tr>";
  
  // echo "<th>S.No</th>";
  // echo "<th>Name</th>";
  // echo "<th>Designation</th>";
  // echo "<th>Programme</th>";
  // echo "<th>Department</th>";
  // echo "<th>Year</th>";
  // echo "<th>Section</th>";
  // echo "<th>Semester</th>";
  //echo "<th>User Name</th>";  
  // echo "<th>Email</th>";
  // echo "<th>Mobile</th>";
  //echo "<th>Password</th>";
  //echo "<th>Update</th>";
  //echo "<th>Delete</th>";
  //echo "<th>Status</th>";
  // echo "</tr>";
     // $i=1;

     // $arr[]=array();
     // $j=0;

     // while($row=mysqli_fetch_array($sql))
  {
    // echo "<tr>";
    // echo "<td>".$i."</td>";
    // echo "<td>".$row['Name']."</td>";
    // echo "<td>".$row['designation']."</td>";
    // echo "<td>".$row['programme']."</td>";
    // echo "<td>".$row['department']."</td>";
    // echo "<td>".$row['year']."</td>";

    // echo "<td>".$row['section']."</td>";
    // echo "<td>".$row['semester']."</td>";
    //echo "<td>".$row['user_alias']."</td>";
    // echo "<td>".$row['email']."</td>";
    // echo "<td>".$row['mobile']."</td>";
    //echo "<td>".$row['password']."</td>";
    //echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=edit_faculty'><span class='glyphicon glyphicon-pencil'style=color:green;></span></a></td>";
    
    
    //echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
    
    
    
   /* if($row['status'])
    {
    echo "<td><a href='update_status.php?user_id=".$row['id']."&status=".$row['status']."'><span class='glyphicon glyphicon-user' style=color:green;></span></a></td>";
    }
    else
    {
    echo "<td><a href='update_status.php?user_id=".$row['id']."&status=".$row['status']."'><span class='glyphicon glyphicon-user' style=color:green;></span></a></td>";
    }*/
    //echo "</tr>";
    //$i++;
  }
      
  // }

      //include('show_faculty.php');
      
   
 

?> -->

</table>
     
      
     <h2 style="padding-left: 360px;"><b>Teacher's Information</b></h2><br><br>

    <form method="post">
      <table class="table table-bordered">
        
        <tr>
          <td style="font-weight: bold;font-size: 1.2em;">Name </td>
          <Td style="font-size: 1.2em;"><b><?php echo $USER['Name'];?></b></td>
        </tr>
        <tr>
          <td style="font-weight: bold;font-size: 1.2em;">Designation</td>
          <Td style="font-size: 1.2em;"><b><?php echo $USER1['designation'];?></b></td>
        </tr>
        
        
        <tr>
          <td style="font-weight: bold;font-size: 1.2em;">Subject</td>
            <Td style="font-size: 1.2em;"><b><?php 
            $num4=mysqli_query($conn,"select DISTINCT programme from faculty where email='$user'");
            $arr[]=array();
            $j=0;
        while( $row2=mysqli_fetch_array($num4)){
          $arr[$j]=$row2['programme'];
          echo $arr[$j]."<br>";       
          
       $j++;
       }
       ?></b></td>
        </tr>
        
        <tr>
          <td style="font-weight: bold;font-size: 1.2em;">Department</td>
          <Td style="font-size: 1.2em;"><b><?php echo $USER2['department'];?></b></td>
        </tr>

        <tr>
          <td style="font-weight: bold;font-size: 1.2em;">Year</td>
      
          <Td style="font-size: 1.2em;"><b><?php 
            $num4=mysqli_query($conn,"select DISTINCT year from faculty where email='$user'");
            $arr[]=array();
            $j=0;
        while( $row2=mysqli_fetch_array($num4)){
          $arr[$j]=$row2['year'];
          echo $arr[$j]."<br>";       
          
       $j++;
       }
       ?></b></td>
        </tr>

        <!-- <tr>
          <td style="font-weight: bold;font-size: 1.2em;">Section</td>
          <Td><b><?php //echo $users['section'];?></b></td>
        </tr> -->

        <tr>
          <td style="font-weight: bold;font-size: 1.2em;">Semester</td>
          <Td style="font-size: 1.2em;"><b><?php 
            $num4=mysqli_query($conn,"select DISTINCT semester from faculty where email='$user'");
            $arr[]=array();
            $j=0;
        while( $row2=mysqli_fetch_array($num4)){
          $arr[$j]=$row2['semester'];

          if($arr[$j]=="i")
                 echo "First Semester"."<br>";
                 else if($arr[$j]=="ii")
                 echo "Second Semester"."<br>";
          //echo $arr[$j]."<br>";       
          
       $j++;
       }
       ?></b></td>
        </tr>

        <tr>
          <td style="font-weight: bold;font-size: 1.2em;">Email</td>
          <Td style="font-size: 1.2em;"><b><?php echo $USER3['email'];?></b></td>
        </tr>

        <tr>
          <td style="font-weight: bold;font-size: 1.2em;">Mobile</td>
          <Td style="font-size: 1.2em;"><b><?php echo $users['mobile'];?></b></td>
        </tr>

      </table>
    </form>
  
      <!-- <h1 class="page-header">Dashboard</h1>
          <div class="row">
            <div class="col-sm-2">
              <a href="?page=update_password"><img src="icon.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <a href="?page=update_password"><h4 style="text-align: center;">Update Password</h4></a>
            </div>

            <div class="col-sm-2">
              <a href="?page=update_profile"><img src="setting.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <a href="?page=update_profile"><h4 style="text-align: center;">Update Profile</h4></a>
            </div>

            <div class="col-sm-2">
              <a href="?page=feedback"><img src="feedback.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <a href="?page=feedback"><h4 style="text-align: center;">Feedback</h4></a>
            </div>
          </div> -->
<?php } ?>
        
          
        </div>
      </div>
    </div>

    <style type="text/css">
        tr:nth-child(even) {background-color: #66CCFF;color: black;}
        tr:nth-child(odd) {color: black;}
    </style>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
