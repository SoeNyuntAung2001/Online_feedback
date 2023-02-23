<?php
session_start();
include('../dbconfig.php');
error_reporting(1);

$user= $_SESSION['user'];
if($user=="")
{
  header('location:../index.php');
}

$sql=mysqli_query($conn,"select * from staff where email='$user' ");
$users=mysqli_fetch_assoc($sql);

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

    <nav class="navbar navbar-inverse navbar-fixed-top" style="background:blue;">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="color:white" href="#">Hello <?php echo $users['name'];?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="logout.php"  style="color:white">Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar" style="background-color: #DCDCDC;border-right: thin solid black;">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="dashboard.php" style="background-color:#0837c4;">Dashboard <span class="sr-only">(current)</span></a></li>
      <!-- find users' image if image not found then show dummy image -->
      
      <!-- check users profile image -->
      <?php 
      $q=mysqli_query($conn,"select * from staff where email='".$_SESSION['user']."'");
      $row=mysqli_fetch_assoc($q);
      if($row['staff']=="")
      {
      ?>
            <li><a href="#"><img style="border-radius:50px" src="../images/person.jpg" width="100" height="100" alt="not found"/></a></li>
      <?php 
      }
      else
      {
      ?>
      <li><a href="#"><img style="border-radius:50px" src="../images/<?php echo $_SESSION['user'];?>/<?php echo $row['image'];?>" width="100" height="100" alt="not found"/></a></li>
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
        include('give_feedback.php');
      
      }
    }
      else{
      
      
      ?>
     
      
      
      
      <!-- <h1 class="page-header">Dashboard</h1>
          <div class="row">
            <div class="col-sm-2">
              <a href="?page=update_password"><img src="icon.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <a href="?page=update_password"><h4 style="text-align: center;">Update Password</h4></a>
            </div>
            <div class="col-sm-2">
              <a href="?page=update_password"><img src="setting.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <a href="?page=update_profile"><h4 style="text-align: center;">Update Profile</h4></a>
            </div>
            <div class="col-sm-2">
              <a href="?page=update_password"><img src="feedback.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <a href="?page=feedback"><h4 style="text-align: center;">Feedback</h4></a>
            </div>
          </div> -->


          <h2 style="padding-left: 360px;"><b>Staff's Information</b></h2><br><br>

    <form method="post">
      <table class="table table-bordered">
        
        <tr style="background-color:#66CCFF;">
          <td style="font-weight: bold;font-size: 1.2em;text-align: center;">Name </td>
          <Td style="font-size: 1.2em;"><b><?php echo $users['Name'];?></b></td>
        </tr>
        <tr >
          <td style="font-weight: bold;font-size: 1.2em;text-align: center;">Email</td>
          <Td style="font-size: 1.2em;"><b><?php echo $users['email'];?></b></td>
        </tr>
        
<!--         
        <tr>
          <td style="font-weight: bold;font-size: 1.2em;text-align: center;">Date Of Birth</td>
            <Td style="font-size: 1.2em;"><b><?php echo $users['Date_Of_Birth'];?></b></td>
        </tr>
         -->
        <tr style="background-color: #66CCFF">
          <td style="font-weight: bold;font-size: 1.2em;text-align: center;">Job_Position</td>
          <Td style="font-size: 1.2em;"><b><?php echo $users['Job_Position']?></b></td>
        </tr>

       
        <tr >
          <td style="font-weight: bold;font-size: 1.2em;text-align: center;">Department</td>
          <Td style="font-size: 1.2em;"><b><?php echo $users['department'];?></b></td>
        </tr>

        <tr style="background-color: #66CCFF">
          <td style="font-weight: bold;font-size: 1.2em;text-align: center;">Mobile</td>
          <Td style="font-size: 1.2em;"><b><?php echo $users['mobile'];?></b></td>
        </tr>

        <tr >
          <td style="font-weight: bold;font-size: 1.2em;text-align: center;">Start Date</td>
          <Td style="font-size: 1.2em;"><b><?php echo $users['start_date'];?></b></td>
        </tr>

        <tr style="background-color:#66CCFF">
          <td style="font-weight: bold;font-size: 1.2em;text-align: center;">Gender</td>
          <Td style="font-size: 1.2em;"><b><?php echo $users['Gender'];?></b></td>
        </tr>


      </table>
    </form>
  
<?php } ?>
        
          
        </div>
      </div>
    </div>

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
