<?php
  include('../dbconfig.php');
  session_start();
  extract($_POST);
  if(isset($login))
  {
$que=mysqli_query($conn,"select * from user where email='$e' and pass='$p'");

    $row=mysqli_num_rows($que);

    echo $row['name'];

    if($row)
      { 
        $_SESSION['user']=$e;

        header('location:dashboard.php');
      }
    else
      {
        $err="<font color='red'>Wrong Email or Password !</font>";
      }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student !</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>



<body style="background-color: white;">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background: #0837c4">
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:white;font-weight: bold;">Online feedback System</a>
                
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                     <li style="color:white">
                        <a style="color:white;" href="..\index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>
                    
                    
                    <li><a style="color:white;" href="..\index.php?info=registration"><i class="fa fa-sign-out fa-fw"></i>Registration</a></li>
                
                
                                
    <li class="dropdown">
        <a style="color:white;" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Login
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="..\index.php?info=login">Student</a></li>
          <li><a href="..\index.php?info=faculty_login">Faculty</a></li> 
          <li><a href="admin">Admin</a></li> 
        </ul>
      </li> 

      <li class="dropdown">
        <a style="color:white;" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Department
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="..\index.php?info=FCS">Faculty of Computer Science</a></li>
          <li><a href="..\index.php?info=FCST">Faculty Of Computer System and Technology</a></li> 
          <li><a href="..\index.php?info=FIS">Faculty Of Information Science</a></li> 
          <li><a href="..\index.php?info=ITSM">Information Technology Support and Maintenance Department</a></li> 
          <li><a href="index.php?info=DNS">Department of Natural Sciences</a></li> 
          <li><a href="..\index.php?info=FCM">Faculty of Computational Mathematics</a></li> 
          <li><a href="..\index.php?info=login">Departme of Languages</a></li> 

        </ul>
      </li> 

                    
            <!-- <li style="color:black;">
                        <a style="color:black;" href="#"><i class="fa fa-info-circle fa-fw"></i>Course</a>
                    </li> -->
      <li class="dropdown">
        <a style="color:white;" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Course
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="..\index.php?info=firstyear">First Year</a></li>
          <li class="hover-me"><a href="..\index.php?info=secondyear">Second Year<i class="fa fa-angle-right"></i></a>
           <div class="sub-menu-2">
             <ul>
               <li type="none"><a style="color: black" href="..\index.php?info=firstyear">CS</li>
               <li type="none"><a style="color: black" href="..\index.php?info=firstyear">CT</li>
             </ul>
           </div>

          </li> 
          <li class="hover-me"><a href="..\index.php?info=thirdyear">Third Year<i class="fa fa-angle-right"></i></a>
         <div class="sub-menu-2">
             <ul>
               <li type="none"><a style="color: black" href="..\index.php?info=firstyear">CS</li>
               <li type="none"><a style="color: black" href="..\index.php?info=firstyear">CT</li>
             </ul>
           </div>
  </li> 
          <li><a href="..\index.php?info=fourthyear">Fourth Year<i class="fa fa-angle-right"></i></a></li> 
          <li><a href="..\index.php?info=fifthyear">Fifth Year<i class="fa fa-angle-right"></i></a></li> 

        </ul>
      </li> 
    
  
    
    
   <li>
      
    
      
      
 <li><a style="color:white;" href="..\index.php?info=contact"><i class="fa fa-phone fa-fw"></i>Contact</a>
                    </li>
                        
                        <li style="color:white;">
                        <a style="color:white;" href="..\index.php?info=about"><i class="fa fa-info-circle fa-fw"></i>About</a>
                    </li>
                    
                   

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>





    <div style="margin-bottom: 40px;" class="container">
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default" style="border: 1px solid #66CCFF;">

                    <div style="background-color: #FFFFFF;" class="panel-heading">
                        <center>
                        <img align="top" src="unilogo.png" width="100" height="100" class="img-responsive" alt="Generic placeholder thumbnail"><br>
                        <h3 style="font-weight: bold;font-size: 1.2em;color: #000000" class="panel-title">Please Sign In Student</h3>
                    </center>
                    </div>

                    <div class="panel-body" style="background-color: #0837c4">
                        <form method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="e" type="email" autofocus required placeholder="Enter Your E-mail">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter Your Password" name="p" type="password" required>
                                </div>
                                
                                
                                <div class="form-group" style="color: #00FFF3">
                                    <input name="login" type="submit" value="Login" class="btn btn-lg btn-primary btn-block">
                                </div>
                                
                               <div class="form-group">
                                    <label>
                                        <?php echo @$err;?>
                                    </label>
                                </div>
                                 
                            </fieldset>
                        </form>
                        <div style="text-align: center;">
                            <a href="..\index.php?info=registration" style="text-decoration: none; color:#FFFFFF;">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

   
<footer class="text-center text-lg-start bg-light text-muted" style="background-color:white;color: #000000;font-weight: bold;">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset" style="color: #000000">
        <i class="fa fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset" style="color: #000000">
        <i class="fa fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset" style="color: #000000">
        <i class="fa fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset" style="color: #000000">
        <i class="fa fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4" style="font-weight: bold;">
            <i class="fas fa-gem me-3"></i>Online Feedback System
          </h6>
         
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4" style="font-weight: bold;">
            Rector Office
          </h6>
          <p>
            <a href="#!" class="fa fa-phone" style="color: #000000"> : 09796266500</a>
          </p>
          <p>
            <a href="#!" class="fa fa-envelope" style="color: #000000"> : Office@gmail.com</a>
          </p>
          <p>
            <a href="#!" class="fa fa-external-link-square" style="color: #000000"> : www.ucspyay.edu.mm</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4" style="font-weight: bold;">
            Student Affairs
          </h6>
          <p>
            <a href="#!" class="fa fa-phone" style="color: #000000"> : 09674225695</a>
          </p>
          <p>
            <a href="#!" class="fa fa-envelope" style="color: #000000"> : Affair@gmail.com</a>
          </p>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4" style="font-weight: bold;">
            Contact Developers
          </h6>
          <p style="color: #000000"><i class="fa fa-phone"></i> : 09694816014</p>
          <p style="color: #000000">
            <i class="fa fa-envelope"></i>
             : onlinefeedbacksystem@gmail.com
          </p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="#!" style="color: #000000">www.onlinefeedbacksystem.com</a>
  </div>
  <!-- Copyright -->
</footer>

</body>

</html>


