
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<link rel="icon" type="image/png" href="Stylesheets/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Login</title>
	
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
		
		
		var email = document.getElementById("email").value;
		
		
		
		
		
		
		if(email=="")
		{
			alert("The field is empty!");
			return false;
		}
		

		return true;
	}
         
</script>

</head>
<body> 

<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">    
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home">PLATEAU</a>
        </div>
       
    </div>
</nav>


<div class="wrapper wrapper-full-page">
    <div class="full-page login-page gray" style="background-image:url(Stylesheets/FullSizeRender.jpg); background-size:cover;">   
        
    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container">
                <div class="row">                   
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
					
                        <form method="post" action="forgotconfirm" onsubmit="return(validate());">
                        <?php echo "<h4 style='color:red;'>&nbsp&nbsp&nbsp" .$_GET['msg'] ."</h4>"; ?>    
                        <!--   if you want to have the card without animation please remove the ".card-hidden" class   -->
                            <div class="card">
                                <div class="header text-center">Password Recovery</div>
                                <div class="content">
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" placeholder="Enter your registered email-address" class="form-control" name="email" id="email">
                                    </div>
                                                                      
                                    
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-fill btn-success btn-wd">
                                Reset Password
                            </button>
                                </div>
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