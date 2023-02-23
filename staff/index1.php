<?php
session_start();
 //require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <title>Online feedback System</title>
  
  <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#66CCFF">
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:#FFFFFF">Online feedback System</a>
        
        
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
           <li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>
          
          
          <li><a style="color:#FFFFFF" href="index.php?info=registration"><i class="fa fa-sign-out fa-fw"></i>Registration</a></li>
        
        
                
  <li class="dropdown">
        <a style="color:#FFFFFF" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Login
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="index.php?info=login">Student</a></li>
      <li><a href="index.php?info=faculty_login">Faculty</a></li> 
          <li><a href="admin">Admin</a></li> 
        </ul>
      </li> 
    
  
    
    
   <li>
                        <a style="color:#FFFFFF" href="index.php?info=contact"><i class="fa fa-phone fa-fw"></i>Contact</a>
                    </li>
            
            <li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php?info=about"><i class="fa fa-info-circle fa-fw"></i>About</a>
                    </li>
          
                   

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php 
          @$info=$_GET['info'];
          if($info!="")
          {
                      
             if($info=="about")
             {
             include('about.php');
             }
            
            
            
            

             
             else if($info=="contact")
             {
             include('contact.php');
             }
            
            
             
             
             else if($info=="login")
             {
             include('login.php');
             }
             
              else if($info=="faculty_login")
             {
             include('faculty_login.php');
             }
             
             
             else if($info=="registration")
             {
              include('registration.php');
             }
          }
          else
          {
        ?>
    <!-- slider start -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" >
            <div class="item active" style="height: 100%">
                
                <div class="fill" style="background-image:url('images/cc4.png');"></div>
        <div class="carousel-caption">
                    
                </div>
            </div>
           
            <div class="item">
                <div class="fill" style="background-image:url('images/cc2.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
      
       <div class="item">
                <div class="fill" style="background-image:url('images/cc2.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
      
      
      
      
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
<!-- slider -->     
  
   
            
        <!-- Page Content -->

               
        
        
        
  
  
        
        
        
      <div class="col-sm-12" style=" background-color: #00FFF3;color: gray;">
        <h2  style="text-align: center;">Welcome to UCS-Pyay Online Feedback System!</h2>
               <p style="text-indent: 3%;font-size: 1.5em;">The main purpose of this UCS-Pyay Online Feedback System is to manage the details of student,faculty,teacher,principal.It manages about student,college,principal,student.The project is totally build at administrative end and thus only the administrator purpose of the project is to build an application program to reduce the manual work for managing the student, feedback, college, faculty.It tracks a details about the faculty, teacher, principal.Feature of student feedback stystem are as follows:</p>
               <ul style="font-size: 1.4em;">
                <li>Provides the seaching facilities based on various factors.Such as Student,Factulty,Teacher,Principle.</li>
                <li>The transactions are executed in off-line mode,hence online data for Student,Feedback capture and modification is not possible.</li>
                <li>It tracks all the information of Feedback,College,Teacher,etc....</li>
                <li>Manage the information of feedback.</li>
                <li>Shows the information and description of the Student,Faculty.</li>
                <li>All the fields such as Student,Faculty,Principal are validated and does not take invalid values.</li>
                <li>It generates the report on Student,College,Feedback.</li>
                <li>Provide filter reports on Faculty,Teacher,Principal. </li>
                <li>You can also export PDF for the Student,College,Teacher.</li>
                <li>Application also provies excel export for Feedback,College.</li>
                <li>You can also export the report into csv format for Student,Feedback,Principal.</li>
                <li>To increase efficiency of managing the Studnet,Feedback,Principle.</li>
                <li>It deals with monitoring the information and transactions of teacher.</li>
                <li>Manage the information of Student.</li>
                <li>Editing,Adding and Updating of Record is improved which results in proper resource management of student data.</li>
                <li>Manage the information of Teacher.</li>
                <li>Integration of all records of principal.</li>
              </ul>

      </div>

      <div>
            <!-- Google Map Copied Code -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3776.435519597203!2d95.252870314085!3d18.82329336476028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c79c9c7fdb5f23%3A0x6b86d31c6da81413!2sComputer%20University%20(Pyay)!5e0!3m2!1sen!2smm!4v1621164798872!5m2!1sen!2smm" width="1350" height="360" allowfullscreen="mx-auto" loading="lazy"></iframe>
        </div>

        <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted" style="background-color:   #00FFF3;color: gray;">
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
      <a href="" class="me-4 text-reset">
        <i class="fa fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
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
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Online Feedback System
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Rector Office
          </h6>
          <p>
            <a href="#!" class="fa fa-phone"> : 09796266500</a>
          </p>
          <p>
            <a href="#!" class="fa fa-envelope"> : Office@gmail.com</a>
          </p>
          <p>
            <a href="#!" class="fa fa-external-link-square"> : www.ucspyay.edu.mm</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Student Affairs
          </h6>
          <p>
            <a href="#!" class="fa fa-phone"> : 09674225695</a>
          </p>
          <p>
            <a href="#!" class="fa fa-envelope"> : Affair@gmail.com</a>
          </p>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact Developers
          </h6>
          <p><i class="fa fa-phone"></i> : 09796266500</p>
          <p>
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
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">www.onlinefeedbacksystem.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


      
      
      
      
        <?php } ?>
            </div>
           </div>

    <!-- /.container -->

     

  
  <!--<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:15px;height:40px; background:#66CCFF">
    <span style="color:#FFFFFF">Developed By .......  <a href="">Final Year Students</a> </span>
  </div>-->

     <!--jQuery--> 
    <script src="css/jquery.js"></script>

    <!--Bootstrap Core JavaScript--> 
    <script src="css/bootstrap.min.js"></script>

    <!--Script to Activate the Carousel-->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

    








</body>

</html>
