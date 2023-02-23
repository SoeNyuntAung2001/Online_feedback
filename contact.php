<?php 
include('dbconfig.php');
extract($_POST);
if(isset($save))
{

mysqli_query($conn,"insert into contact values('','$n','$e','$m','$msg',now())");
	
$err="<font color='green'>Admin Will Contact you soon</font>";	

}

?>
<body style="background-color:#0837c4">
        <div class="container" style="background-color: white">

        <!-- Page Heading/Breadcrumbs 
        <div class="row">
            <div class="col-lg-12">
                
                <ol class="breadcrumb">
                    
                    </li>
                   
                </ol>
            </div>
        </div>
        .row -->

        <!-- Content Row -->
       <div class="row">
            <div class="col-md-8">
                <h3><font style="color:blue;">Suggest</font></h3>
                <form name="sentMessage" method="post" id="contactForm" novalidate>
                  <?php echo @$err; ?>
				    <div class="control-group form-group">
                        
						
						<div class="controls">
                            <label>Name:</label>
                            <input type="text" class="form-control" name="n" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Mobile Number:</label>
                            <input type="number" class="form-control" name="m" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name="e" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" name="msg" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="save" class="btn btn-primary">Send Message</button>
					<h1></h1>
                </form>
            </div>
			<div class="col-md-4" style="margin-top:30px">
                <h3 style="color:blue;">Contact Details</h3>
                <p>
                    University of Computer Studies,Pyay<br>Pyay,Bago Region.<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: 053-28639</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">ucspyay@gmail.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 4:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        </div>
        
            <!-- Contact Details Column -->
            
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <!-- /.row -->

    <br/><br/>

    <footer class="text-center text-lg-start bg-light text-muted" style="background-color:white;color: #000000;font-weight: bold;border-top: thin solid black;">
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
      <a href="" class="me-4 text-reset" style="color:black">
        <i class="fa fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset" style="color: black">
        <i class="fa fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset" style="color: black">
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
    
    </div>
    <!-- /.container -->

</body>
