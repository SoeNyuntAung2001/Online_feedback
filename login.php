<?php
	include('../dbconfig.php');
	session_start();
	extract($_POST);      ////////
	if(isset($login))
	{
        if($e=="" || $p=="")
        {
            $err="<font color='red'>Fill all the fields first</font>";
        }
        else
        {
        $pass=md5($p);
         //echo $pass;
   $sql=mysqli_query($conn,"select * from user where email='$e' and pass='$pass'");
		$r=mysqli_num_rows($sql);
        //echo $r;
		if($r==true)
			{	
				$_SESSION['user']=$e;
				header('location:user');
			}
		else
			{
				$err="<font color='red'>Invalid login details!</font>";
			}
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

    <!-- jQuery -->
    <script src="../../demo/css/css/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../demo/css/css/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../..demo/css/css/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../demo/css/css/sb-admin-2.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-color:  #0837c4;">

    <div style="margin-top: 40px;" class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default" style="border: 1px solid #66CCFF;">

                    <div style="background-color: #FFFFFF;" class="panel-heading">
                        <center>
                        <img align="top" src="unilogo.png" width="100" height="100" class="img-responsive" alt="Generic placeholder thumbnail"><br>
                        <h3 style="font-weight: bold;font-size: 1.2em;color: #000000" class="panel-title">Please Sign In Student</h3>
                    </center>
                    </div>

                    <div class="panel-body" style="background-color: #66CCFF">
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

                                <div class="form-group" style="color: #00FFF3">
                                    <center>
                                    <a style="color: #000000" href="index.php?info=registration">Sign Up Here</a>
                                </center>
                                    
                                </div>
                                
                               <!--  <div class="form-group">
                                    <label>
                                        <?php echo @$err;?>
                                    </label>
                                </div>
                                 -->
                                
                            </fieldset>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
   
<footer class="text-center text-lg-start bg-light text-muted" style="background-color:#c443e8;color: #000000;font-weight: bold;">
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
          <p style="color: #000000"><i class="fa fa-phone"></i> : 09796266500</p>
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
