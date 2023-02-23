
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>registration</title>

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

<body class="bg-image">


		<div class="row"  >
		<div class="col-sm-2"></div>
		<div class="col-sm-9">
		<form method="post" enctype="multipart/form-data" action="thankyou.php">
	<table class="table table-bordered" style="margin-bottom:50px;color: black;font-size: 1.2em;font-weight: bold;">
	<caption><h2 align="center" style="color:white;font-weight: bold; ">Registration Form</h2></caption>
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
    <td></td>
	</Tr>
				
				<tr>
					<td>Enter Your name</td>
					<Td><input  type="text" name="n" class="form-control" patterns="[A-Za-z]+" required/></Td><td><font color="red">*</font></td>
				</tr>
				<tr>
					<td>Enter Your email </td>
					<Td><input type="email" name="e" class="form-control" required/></td>
            <td><font color="red">*</font></td>
				</tr>
				
				<tr>
					<td>Enter Your Password </td>
					<Td><input type="password" name="p" class="form-control" required/></td>
            <td><font color="red">*</font></td>
				</tr>
				
				<tr>
					<td>Enter Your Mobile </td>
					<Td><input type="text" name="mob" class="form-control" required/></td>
            <td><font color="red">*</font></td>
				</tr>
				
				<tr>
					<td>Select Your Major</td>
					<Td><select name="pro" class="form-control" required>
					<option>Select Your Major</option>
					<option>B.C.Sc</option>
					<option>B.C.Tech</option>
					</select>
					</td>
          <td><font color="red">*</font></td>
				</tr>

        <tr>
          <td>Select Your Class</td>
          <Td>
          <select name="classname" class="form-control" required>
          <option>Select Your Class</option>
          <option>First Year</option>
          <option>Second Year</option>
          <option>Third Year</option>
          <option>Fourth Year</option>
          <option>Fifth Year</option>

          </select>
          </td>
          <td><font color="red">*</font></td>
        </tr>

        <tr>
          <td>Select Your Class Name </td>
          <Td>
          <select name="cname" class="form-control" required>
          <option>Select Your Class Name</option>
          <option>Section-A</option>
          <option>Section-B</option>
          <option>Section-C</option>
          <option>CT</option>
          </select>
          </td>
          <td><font color="red">*</font></td>
        </tr>
				<tr>
      
				<tr>
					<td>Select Your Semester</td>
					<Td><select name="sem" class="form-control" required>
					<option>Select Your Semester</option>
          <option value="i">First Semester</option>
					<option value="ii">Second Semester</option>
					</select>
					</td>
          <td><font color="red">*</font></td>
				</tr>
				
				<tr>
					<td>Select Your Gender</td>
					<Td>
				Male<input type="radio" name="gen" value="male"/>
				Female<input type="radio" name="gen" value="female"/>	
					</td>
          <td></td>
				</tr>
				
				<tr>
          <td>Choose Your hobbies</td>
          <Td>
          Reading<input value="reading" type="checkbox" name="hob[]"/>
          Singing<input value="singing" type="checkbox" name="hob[]"/>
          Gaming<input value="gaming" type="checkbox" name="hob[]"/>
          Dancing<input value="dancing" type="checkbox" name="hob[]"/>
          Playing Football<input value="playing football" type="checkbox" name="hob[]"/>
          Playing Backetball<input value="playing backetball" type="checkbox" name="hob[]"/>
          </td>
        </tr>

        <tr>
          <td>Choose Your Interesting Language</td>
          <Td>
          Java<input value="java" type="checkbox" name="interest[]"/>
          JavaScript<input value="javascript" type="checkbox" name="interest[]"/>
          C#<input value="c" type="checkbox" name="interest[]"/>
          Android<input value="android" type="checkbox" name="interest[]"/>
          Networking<input value="networking" type="checkbox" name="interest[]"/>
          Others<input value="other" type="checkbox" name="interest[]"/>

          </td>
          <td></td>
        </tr>
				
				
				<tr>
					<td>Upload  Your Image </td>
					<Td><input type="file" name="img" class="form-control" required/></td>
            <td></td>
				</tr>
				
				<tr>
					<td>Enter Your DOB</td>
					<Td>
					<select style="width:100px;float:left" name="yy" class="form-control" required>
					<option value="">Year</option>
					<?php 
					for($i=1950;$i<=2016;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					<select style="width:100px;float:left" name="mm" class="form-control" required>
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
 					
					<select style="width:100px;float:left" name="dd" class="form-control" required>
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					</td>
          <td></td>
				</tr>
				
				<tr>
					
					
<Td colspan="2" align="center">
<input style="color: white" type="submit" value="Save" class="btn btn-info" name="save"/>
<input style="color: white" type="reset" value="Reset" class="btn btn-info"/>
</Td>			
<td>	</td>
				</tr>
			</table>
		</form>
		</div>
		<div class="col-sm-2"></div>
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



<style type="text/css">
    

    td
    {
      color:white;
    }
    *{
  margin:0;
  padding:0;
  }
 body{
       
    margin-top:40px;
    background-repeat: no-repeat;
    background-position:center;
   background-size:cover;
   font-family:sans-serif;
    }

   .regform{
          width:800px;
    background-color:rgb(0,0,0,0.6);
    margin:auto;
    color:#FFFFFF;
    padding:10px 0px 10px 0px;
    text-align:center;
    border-radius:15px 15px 0px 0px ;
    }  
  .main{
      background-color:rgb(0,0,0,0.5);
   width:800px;
   margin:auto;}
  
  form{
      padding:10px;
   
  } 
  
  #name{
       width:100%;
    height:100px;
    
    }  
  .name{
            margin-left:25px;
   margin-top:30px;
   width: 125px;
            color: white;
            font-size: 18px;
            font-weight: 700;}
.firstname{
                   position: relative;
       left:200px;
       top:-37px;
       line-height: 40px;
       border-radius: 6px;
       padding: 0 22px;
       font-size: 16px;
       
       }
.lastname{
             position: relative;
       left:417px;
       top:-80px;
       line-height: 40px;
       border-radius: 6px;
       padding: 0 22px;
       font-size: 16px;
       color:#555;       
                  }  
 .firstlabel{
            position:relative;
            color:#E5E5E5;    
      text-transform: capitalize;
   font-size: 14px;
   left:203px;
   top:-45px;
   }   
.lastlabel{
            position:relative;
   color:#E5E5E5;
   text-transform:capitalize;
   font-size:14px;
   left:492px;
   top:-76px;
     } 
.company{
           position:relative;
     left:200px;
     top:-37px;
     line-height: 40px;
     width:480px;
        border-radius: 6px;
     padding: 0 22px;
     font-size: 16px;
     color: #555;  }
 .email{
        position:relative;
  left:200px;
     top:-37px;
     line-height: 40px;
     width:480px;
        border-radius: 6px;
     padding: 0 22px;
     font-size: 16px;
     color: #555;  
    }     
 
   .Code{
         position:relative;
  left:200px;
     top:-37px;
     line-height: 40px;
     width:95px;
        border-radius: 6px;
     padding: 0 22px;
     font-size: 16px;
     color: #555;  
  }
 .number{
         position:relative;
  left:200px;
     top:-37px;
     line-height: 40px;
     width:255px;
        border-radius: 6px;
     padding: 0 22px;
     font-size: 16px;
     color: #555; 
     }
 .area-code{
            position:relative;
      color:#E5E5E5;
      text-transform:capitalize;
      font-size:16px;
      left:54px;
      top:-4px;
     }
 .phone-number{
              position:relative;
      color:#E5E5E5;
      text-transform:capitalize;
      font-size:16px;
      left:-100px;
      top:-2px;
     }
 .option{
         position:relative;
  left:200px;
     top:-37px;
     line-height: 40px;
     width:532px;
     height:40px;
        border-radius: 6px;
     padding: 0 22px;
     font-size: 16px;
     color: #555; 
     outline:none;
     overflow:hidden;
  }    
     .option option{
                 font-size:20px;
       }
   #coustomer{
                margin-left:25px;
    color:white;
    font-size:18px;
    
      } 
     .radio{
         display:inline-block;
   padding-right:70px;
   font-size:25px;
   margin-left:25px;
   margin-top:15px;
   color:white;
   }
  .radio input{
              width:20px;
     height:20px;
     border-radius:50%;
     cursor:pointer;
     outline:none;
    } 
    button{
        background-color:#3BAF9F;
     display:block;
     margin:20px 0px 0px 20px;
     text-align:center;
     border-radius:12px;
     border:2px solid #366473;
     padding:14px 110px;
     outline:none;
     color:white;
     cursor:pointer;
     transition:0.25px;
    } 
   button:hover{
                background-color:#5390F5;
      } 
      .bg-image
      {
        background-image: url("images/reg1.jpg");background-attachment: fixed;background-size: 100% 100%;
        backdrop-filter: blur(50px); /* blur effect to the backdrop */
	  background-color: rgba(255, 255, 255, 0.2);
        /* filter: blur(8px);
  -webkit-filter: blur(8px); */
  /* backdrop-filter: blur(100px);
  -webkit-backdrop-filter: blur(100px); */
      } 
</style>