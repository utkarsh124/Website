<?php session_start();
if($_SESSION['uid']!=null)
{
header("location: dashboard");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	 <link rel="icon" type="image/png" href="Stylesheets/favicon.ico">
    <title>Plateau-A Content Discovery platform for apps,games,music,websites and illustrations</title>
    <meta name="description" content="A content discovery and mobile marketing platform to promote indie games,apps,music,websites,illustrations and digital art">

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    


    <!-- Bootstrap core CSS     -->
    <link href="Stylesheets/assets/css/bootstrap.min.css" rel="stylesheet" />
        
    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="Stylesheets/assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="Stylesheets/assets/css/demo.css" rel="stylesheet" />
    
        
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="Stylesheets/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<script type="text/javascript">
	
	function validate()
	{
		
		
		var email=document.getElementById("email").value;
		var pass=document.getElementById("pass").value;
		
		
		//alert("Worked"+fn +ln +email +pass +reppass +age +ref +country +tnc);
		//return false;
		
		
		if(email=="" ||pass=="" )
		{
			alert("One or more fields are empty");
			return false;
		}
		
	}
         
</script>
	
</head>
<body> 


<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">    
       
            <!--a class="navbar-brand" href="home">PLATEAU</a-->

            <a class="navbar-brand" href="home">
                        
                                <img src="Stylesheets/navlogo.png" alt="" height="40px" width="200px" style="vertical-align: middle;"/>    
                            
                    </a>
            <!--button id="menu-toggle" class="navbar-toggle btn btn-fill btn-success" data-toggle="collapse" data-target="example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                    <a href="signup" style="color:#FFFFFF;">
                                Sign Up</a>
                    </button--> 

                      <ul class="nav navbar-nav navbar-right" style="float:right;">   
          <li> <button type="button" class="btn btn-fill btn-success navbar-btn"><a href="signup" style="color:#FFFFFF;">
                                Sign Up</a>
                            </button></li>
                            </ul>
    
 
        </div>
</nav>




<div class="wrapper wrapper-full-page">
	<?php
			$random_number = mt_rand(1,5);
			if($random_number == 1)
			{
			echo "<div class='full-page login-page gray' style='background-image:url(Stylesheets/music1.jpg); background-size:cover;'>";
			}
			else if($random_number == 2)
			{
			echo "<div class='full-page login-page gray' style='background-image:url(Stylesheets/setup_1.jpg); background-size:cover;'>";
			}
			else if($random_number == 3)
			{
			echo "<div class='full-page login-page gray' style='background-image:url(Stylesheets/music2.jpg); background-size:cover;'>";
			}
			else if($random_number == 4)
			{
			echo "<div class='full-page login-page gray' style='background-image:url(Stylesheets/music2.jpg); background-size:cover;'>";
			}
            else if($random_number == 5)
            {
            echo "<div class='full-page login-page gray' style='background-image:url(Stylesheets/desk-setup-creative-space.jpg); background-size:cover;'>";
            }
			
	?>  
    
        
    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
	
        <div class="content">
            <div class="container">
                <div class="row">                   
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
					<?php echo "<h4 style='color:red;'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_GET['error'] ."</h4>"; ?>
                        <form action="loginuser" method="post" onsubmit="return(validate());">
                            
                        <!--   if you want to have the card without animation please remove the ".card-hidden" class   -->
                            <div class="card">
                                <div class="header text-center">Login</div>
                                <div class="content">
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" placeholder="Enter email" name="email" id="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" placeholder="Password" name="pass" id="pass" class="form-control">
                                    </div>                                    
                                    
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-fill btn-success btn-wd">
                                Login
                            </button>
                                </div>
                            </div>
                              <div class="col-lg-12">
                <a href="signup" class="pull-left" style="color:#ffffff;">Not a Member? SignUp</a>
                <a href="forgot" class="pull-right" style="color:#ffffff;">Forgot Password?</a>
            </div>  
                        </form>
                                
                    </div>                    
                </div>
            </div>
        </div>
        
        <footer class="footer footer-transparent">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="home">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="aboutus">
                                About Us
                            </a>
                        </li>
                        
                    </ul>
                </nav>
                <!--div class="social-area pull-right">                
                        <a class="btn btn-social btn-facebook btn-simple">
                        <i class="fa fa-facebook-square"></i>
                        </a>
                        <a class="btn btn-social btn-twitter btn-simple">
                        <i class="fa fa-twitter"></i>
                        </a>
                    </div-->
                <div class="copyright pull-right">
                    &copy; 2015 <a href="#">BrainStorm Studios</a>
                </div>
            </div>
        </footer>

    </div>                             
       
</div>
</body>
    
    <!--   Core JS Files   -->
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery-ui.min.js" type="text/javascript"></script> 
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    
    <script src="Stylesheets/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="Stylesheets/assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
    <script src="Stylesheets/assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="Stylesheets/assets/js/awesome-landing-page.js" type="text/javascript"></script>
    
    
   
   
    <script src="assets/js/bootstrap-select.js"></script>
    
    <!--  Checkbox, Radio, Switch and Tags Input Plugins -->
    <script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>
    
    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    
    
    <!-- Light Bootstrap Dashboard Core javascript and methods -->
    <script src="assets/js/light-bootstrap-dashboard.js"></script>
    
    <!--   Sharrre Library    -->
    <script src="../../assets/js/jquery.sharrre.js"></script>
    
    <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>
    
    
</html>