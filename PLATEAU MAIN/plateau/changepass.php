<?php session_start(); 

if($_SESSION['uid']==null)
{
header("location: login");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Change Password</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="Stylesheets/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="Stylesheets/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <!--link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/-->
    <link href="Stylesheets/assets/css/light-bootstrap-dashboard-pro.css" rel="stylesheet"/>
    <link href="Stylesheets/assets/css/custdash.css" rel="stylesheet"/>
    <link href="Stylesheets/assets/css/sb-admin.css" rel="stylesheet">
    <link href="Stylesheets/assets/css/font-awesome.min.css" rel="stylesheet">
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="Stylesheets/assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="Stylesheets/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
	
	
	<script type="text/javascript">
	
	function validate()
	{
		
		
		var current = document.getElementById("currentpass").value;
		var pass = document.getElementById("pass").value;
		var reppass = document.getElementById("confirmpass").value;
		
		
		//alert("Worked"+fn +ln +email +pass +reppass +age +ref +country +tnc);
		//return false;
		
		
		if(current=="" ||pass=="" ||reppass=="" )
		{
			alert("One or more fields are empty");
			return false;
		}
		else if(reppass!=pass)
		{
			alert("Passwords do no match");
			return false;
		}

		return true;
	}
         
</script>

</head>
<body>

<div class="wrapper">
     <div class="sidebar" data-color="gray" data-image="assets/img/sidebar-1.jpg">
        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="logo">
            <a href="#">
                        
                                <img src="Stylesheets/navlogo.png" alt="" height="37px" width="200px" style="vertical-align: middle;"/>    
                            
                    </a>
        </div>
       

        <div class="sidebar-wrapper">
            <div class="user">
                <!--div class="photo">
                    <img src="../images/utkarsh.jpg" />
                </div-->
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        <?php echo $_SESSION['fname'] ." " .$_SESSION['lname'] ?>
                        <b class="caret"></b>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li class="active"><a href="editprofile">Edit Profile</a></li> 
                        </ul>
                    </div>
                </div>
            </div>

            <ul class="nav">
                
                <li>
                    <a href="dashboard">
                        <i class="fa fa-tachometer"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="submitcontent">
                        <i class="fa fa-arrow-circle-right"></i>
                        <p>Submit Content</p>
                    </a>
                </li>
                <li class="hidden-lg hidden-md">
                    <a href="logout">
                        <i class="fa fa-sign-out"></i>
                        <p>Log Out</p>
                    </a>
                </li>
               
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Edit Profile</a>
                </div>
                <div class="collapse navbar-collapse" id="navigation-example-2">
                    <!--ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                    </ul-->

                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden-sm hidden-xs">
                            <a href="logout">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



        <div class="content">
            <div class="container-fluid">
                 <div class="row">
                    <div class="col-md-5 col-md-offset-3">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Change Password</h4>
                            </div>
                            <hr>
							<?php echo "<h4 style='color:red;'>" .$_GET['msg'] ."</h4>"; ?>
                            <form method="POST" action="changepassworddb" onsubmit="return(validate());">
                                <div class="content">
                                    <div class="form-group">
                                        <label>Current Password</label>
                                        <input type="password" placeholder="Current Password" class="form-control" name="currentpass" id="currentpass">
                                    </div>
                                    <div class="form-group">
                                        <label>Enter New Password</label>
                                        <input type="password" placeholder="New Password" class="form-control" name="pass" id="pass">
                                    </div>
                                    <div class="form-group">
                                        <label>Re-Enter New Password</label>
                                        <input type="password" placeholder="Confirm New Password" class="form-control" name="confirmpass" id="confirmpass">
                                    </div>
                                                                  
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-fill btn-success btn-wd">
                                Submit
                            </button>
                                </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
       

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
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

</div>
</body>

    <!--   Core JS Files   -->
    <script src="Stylesheets/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="Stylesheets/assets/js/bootstrap.min.js" type="text/javascript"></script>
    
    <script src="Stylesheets/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="Stylesheets/assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
    <script src="Stylesheets/assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="Stylesheets/assets/js/awesome-landing-page.js" type="text/javascript"></script>
    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="Stylesheets/assets/js/bootstrap-checkbox-radio-switch.js"></script>

    <!--  Charts Plugin -->
    <script src="Stylesheets/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="Stylesheets/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="Stylesheets/assets/js/light-bootstrap-dashboard.js"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="Stylesheets/assets/js/demo.js"></script>


</html>
