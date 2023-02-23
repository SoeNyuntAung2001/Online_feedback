<?php
session_start();
 require('dbconfig.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Online Student feedback System</title>
	
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#0837c4;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="images/feed1.jpg" width="50px" height="50px" style="margin-left:-280px; border-radius: 50%; margin-top:5px;position:relative;"/>
                <a class="navbar-brand" href="index.php" style="color:#ebecf2;font-size:large;font-weight: bold; margin-top:5px;">Online feedback System</a>
                <!-- <img src="images/feed1.jpg" width="50px" height="50px" style="margin-left:220px; border-radius: 50%; margin-top:5px;"/> -->
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" class="menu-bar">
                <ul class="nav navbar-nav navbar-right">
                    
					 <li style="color:#ebecf2">
                        <a style="color:#ebecf2;" href="index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>
					
					
					<li><a style="color:#ebecf2;" href="index.php?info=registration"><i class="fa fa-sign-out fa-fw"></i>Registration</a></li>
				
				
								
	<li class="dropdown">
        <a style="color:#ebecf2;" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Login
        <span class="caret"></span></a>
        <ul class="dropdown-menu" id="menu">
          
          <li><a href="user">Student</a></li>
          <li><a href="staff">Staff</a></li> 
		  <li><a href="faculty">Teacher</a></li> 
          <li><a href="admin">Admin</a></li> 
        </ul>
      </li> 

      <li class="dropdown" >
        <a style="color:white; background-color:" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Department
        <span class="caret"></span></a>
        <ul class="dropdown-menu" id="menu" class="dropdown-content">
          
        <li><a href="index.php?info=student_affair">Student Affair</a></li>
        <li><a href="index.php?info=management">Management</a></li>
        <li><a href="index.php?info=finance">Finance</a></li>
        <li><a href="index.php?info=library">Library</a></li>
          <li><a href="index.php?info=FCS">FCS</a></li>
          <li><a href="index.php?info=FCST">FCST</a></li> 
          <li><a href="index.php?info=FIS">FIS</a></li> 
          <li><a href="index.php?info=ITSM">ITSM</a></li> 
          <li><a href="index.php?info=DNS">DNS</a></li> 
          <li><a href="index.php?info=FCM">FCM</a></li> 
          <li><a href="index.php?info=Language">DL</a></li> 
         
        </ul>
      </li> 

                    
            <!-- <li style="color:black;">
                        <a style="color:black;" href="#"><i class="fa fa-info-circle fa-fw"></i>Course</a>
                    </li> -->
      <li class="dropdown" >
        <a style="color:#ebecf2; " href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Course
        <span class="caret"></span></a>
        <ul class="dropdown-menu" id="menu" >
          <li><a href="index.php?info=firstyear" >First Year</a></li>
          <li class="hover-me"><a href="index.php?info=secondyear">Second Year<!-- <i class="fa fa-angle-right"> --></i></a>
           <!-- <div class="sub-menu-2">
             <ul>
               <li type="none"><a style="color: black" href="index.php?info=firstyear">CS</li>
               <li type="none"><a style="color: black" href="index.php?info=firstyear">CT</li>
             </ul>
           </div> -->

          </li> 
          <li class="hover-me"><a href="index.php?info=thirdyear">Third Year<!-- <i class="fa fa-angle-right"> --></i></a>
         <!-- <div class="sub-menu-2">
             <ul>
               <li type="none"><a style="color: black" href="index.php?info=firstyear">CS</li>
               <li type="none"><a style="color: black" href="index.php?info=firstyear">CT</li>
             </ul>
           </div> -->
  </li> 
          <li><a href="index.php?info=fourthyear">Fourth Year<!-- <i class="fa fa-angle-right"></i> --></a></li> 
          <li><a href="index.php?info=fifthyear">Fifth Year<!-- <i class="fa fa-angle-right"></i> --></a></li> 

        </ul>
      </li> 
	  
      
	 <li>
                        <a style="color:#ebecf2;" href="index.php?info=contact"><i class="glyphicon glyphicon-envelope"></i>Suggest</a>
                    </li>
					 	
					 	<li style="color:black;">
                        <a style="color:#ebecf2;" href="index.php?info=about"><i class="fa fa-info-circle fa-fw"></i>About</a>
                    </li>

                    <!-- <li style="color:black;">
                        <a style="color:#ebecf2;" href="index.php?info=suggest"><i class="glyphicon glyphicon-envelope"></i>Suggest</a>
                    </li> -->
            <!-- <li style="color:black;">
                        <a style="color:black;" href="#"><i class="fa fa-info-circle fa-fw"></i>Department</a>
                        <div class="sub-menu-1">
                        <ul>
                          <li><a href="#">Faculty of Computer Science</a></li>
                          <li><a href="#">Faculty Of Computer Technology</a></li>
                          <li><a href="#">Information Technology Support and Maintenance Dep</a></li>
                          <li><a href="#">Department of Natural Sciences</a></li>
                          <li><a href="#">Faculty of Computational Mathematics</a></li>
                          <li><a href="#">Departmeof Languages</a></li>
                        </ul>
                      </div>
                    </li> -->
      
     
      
        
					
                   

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
             else if($info=="suggest")
						 {
						 include('suggest.php');
						 }
						
						//else if($info=="login")
						 //{
						 //include('login.php');
						 //}
						 
						  else if($info=="faculty_login")
						 {
						 include('faculty_login.php');
						 }
						 else if($info=="management")
						 {
						 	include('management.php');
						 }
						 else if($info=="registration")
						 {
						 	include('registration.php');
						 }
             else if($info=="student_affair")
             {
              include('student_affair.php');
             }
             else if($info=="finance")
             {
              include('finance.php');
             }
             else if($info=="library")
             {
              include('library.php');
             }
             else if($info=="FCS")
             {
              include('FCS.php');
             }
             else if($info=="FCST")
             {
              include('FCST.php');
             }
             else if($info=="ITSM")
             {
              include('ITSM.php');
             }
             else if($info=="DNS")
             {
              include('DNS.php');
             }
             else if($info=="FCM")
             {
              include('FCM.php');
             }
             else if($info=="FIS")
             {
              include('FIS.php');
             }
             else if($info=="firstyear")
             {
              include('firstyear.php');
             }
             else if($info=="secondyear")
             {
              include('secondyear.php');
             }
             else if($info=="thirdyear")
             {
              include('thirdyear.php');
             }
             else if($info=="fourthyear")
             {
              include('fourthyear.php');
             }
             else if($info=="fifthyear")
             {
              include('fifthyear.php');
             }
             else if($info=="Language")
             {
              include('Language.php');
             }
					}
					else
					{
				?>
		<!-- slider start -->
    <header id="myCarousel" class="carousel slide" style="margin-bottom:10%;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" style="height:700px;" >
            <div class="item active" >
                <!-- <div class="fill"><img src="images/1pic.jpg" alt="" width="100%" height="1000px"></div> -->
                <div class="fill" style="background-image:url('images/pic00.jpg');background-attachment:fixed;background-position:center;"></div>
				<div class="carousel-caption">
                    
                </div>
            </div>
           
            <div class="item">
            <!-- <div class="fill"><img src="images/2pic.jpg" alt="" width="100%" height="1000px"></div> -->
                <div class="fill" style="background-image:url('images/pic10.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			 <div class="item">
       <!-- <div class="fill"><img src="images/1pic.jpg" alt="" width="100%" height="1000px"></div> -->
                <div class="fill" style="background-image:url('images/pic16.jpg');"></div>
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

               
				
				
				
	
	
				
				
				
			<div class="col-sm-12" style="background-color: #e4e6ed; color: blue;margin-top: 60px;">
				<h2  style="text-align: center;">Welcome to Online Feedback System!</h2>
               <p style="text-indent: 3%;font-size: 1.5em;">The main purpose of this University Online Feedback System is to manage the details of student,faculty,teacher,principal.It manages about student,college,principal,student.The project is totally build at administrative end and thus only the administrator purpose of the project is to build an application program to reduce the manual work for managing the student, feedback, college, faculty.It tracks a details about the faculty, teacher, principal.Feature of student feedback stystem are as follows:</p>
               <ul style="font-size: 1.4em;">
               	<li>*Provides the seaching facilities based on various factors.Such as Student,Factulty,Teacher,Principle.</li><br>
               	<li>*The transactions are executed in off-line mode,hence online data for Student,Feedback capture and modification is not possible.</li><br>
                <li>*It tracks all the information of Feedback,College,Teacher,etc....</li><br>
                <li>*Manage the information of feedback.</li><br>
                <li>*Shows the information and description of the Student,Faculty.</li><br>
                <li>*All the fields such as Student,Faculty,Principal are validated and does not take invalid values.</li><br>
                <li>*It generates the report on Student,College,Feedback.</li><br>
                <li>*Provide filter reports on Faculty,Teacher,Principal. </li><br>
                <li>*You can also export PDF for the Student,College,Teacher.</li><br>
                <li>*Application also provies excel export for Feedback,College.</li><br>
                <li>*You can also export the report into csv format for Student,Feedback,Principal.</li><br>
                <li>*To increase efficiency of managing the Studnet,Feedback,Principle.</li><br>
                <li>*It deals with monitoring the information and transactions of teacher.</li><br>
                <li>*Manage the information of Student.</li><br>
                <li>*Editing,Adding and Updating of Record is improved which results in proper resource management of student data.</li><br>
                <li>*Manage the information of Teacher.</li><br>
                <li>*Integration of all records of principal.</li>
              </ul>

			</div>

			<div>
            <!-- Google Map Copied Code -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3776.435519597203!2d95.252870314085!3d18.82329336476028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c79c9c7fdb5f23%3A0x6b86d31c6da81413!2sComputer%20University%20(Pyay)!5e0!3m2!1sen!2smm!4v1621164798872!5m2!1sen!2smm" width="1350" height="360" allowfullscreen="mx-auto" loading="lazy"></iframe>
        </div>

 <footer class="text-center text-lg-start bg-light text-muted" style="background-color:#e4e6ed;;color: #0837c4;font-weight: bold;">
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
      <a href="" class="me-4 text-reset" style="color: #0837c4">
        <i class="fa fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset" style="color: #0837c4">
        <i class="fa fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset" style="color: #0837c4">
        <i class="fa fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset" style="color: #0837c4">
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
          <!-- <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p> -->
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4" style="font-weight: bold;">
            Rector Office
          </h6>
          <p>
            <a href="#!" class="fa fa-phone" style="color:#0837c4"> : 09796266500</a>
          </p>
          <p>
            <a href="#!" class="fa fa-envelope" style="color: #0837c4"> : Office@gmail.com</a>
          </p>
          <p>
            <a href="#!" class="fa fa-external-link-square" style="color: #0837c4"> : www.ucspyay.edu.mm</a>
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
            <a href="#!" class="fa fa-phone" style="color:#0837c4"> : 09674225695</a>
          </p>
          <p>
            <a href="#!" class="fa fa-envelope" style="color: #0837c4"> : Affair@gmail.com</a>
          </p>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4" style="font-weight: bold;">
            Contact Developers
          </h6>
          <p style="color: #0837c4"><i class="fa fa-phone"></i> : 09694816014</p>
          <p style="color: #0837c4">
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
    <a class="text-reset fw-bold" href="#!" style="color: #0837c4">www.onlinefeedbacksystem.com</a>
  </div>
  <!-- Copyright -->
</footer>


			
			
			
			
				<?php } ?>
            </div>
           </div>

    <!-- /.container -->

     

	
	<!--<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:15px;height:40px; background:#66CCFF">
		<span style="color:#FFFFFF">Developed By ....... 	<a href="">Final Year Students</a> </span>
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

    



<style type="text/css">

.dropdown-menu a{
  color:#e4e6ed;
}

  .sub-menu-1{
    display: none;
  }
  ul li:hover .sub-menu-1 ul li
  {
    width: 150px;
    padding:10px;
    border-bottom: 1px dotted #fff;
    background:transparent;
    border-radius: 0;
    text-align: left; 
  }

  .fa-angle-right{
    float: right;
  }

  .sub-menu-2{
    display: none;
    text-decoration: none;
  }

  .hover-me:hover .sub-menu-2{
    position: absolute;
    display: block;
    margin-top: -10px;
    margin-left: 150px;
    background:white;
  }

  ul { list-style-type:none; margin:1; padding:1; padding-top:7px; padding-bottom:5px; } 
  li { display:inline; }
//


 ul#menu li.dropdown .dropbtn{
        display:inline-block;
        color:ghostwhite;
        text-decoration:none;
        text-align:center;
        padding:14px 16px;
    }

ul#menu li a:hover:not(.active), .dropdown:hover .dropbtn{
        background-color:blue;
        color:white;
        }
        .active{
            background-color:ivory;
        }

ul#menu li.dropdown{
        display:inline-block;
        }
ul#menu .dropdown-content {
        display: none;
        position: absolute;
        color:white;
        background-color: white;
        min-width: 160px;
    }
ul#menu .dropdown-content a{
        color:dodgerblue;
        padding: 12px 16px;
        text-decoration:none;
        display:block;
        text-align:left;
    }
ul#menu .dropdown .dropdown-content a:hover{
        background-color: skyblue;

    }
ul#menu .dropdown:hover .dropdown-content {
        display: block;
    }
</style>




</body>

</html>
