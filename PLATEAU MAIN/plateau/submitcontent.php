<?php
 session_start();
if($_SESSION['uid']==null)
{
header("location: login");
}

$firstname = $_SESSION['fname'];
$lastname = $_SESSION['lname'];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Submit Content</title>

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
		var ptitle =document.getElementById("ptitle").value;
		var pdes = document.getElementById("pdes").value;
		var burl = document.getElementById("burl").value;
		var iurl = document.getElementById("iurl").value;
		var curl = document.getElementById("curl").value;
		var cat = document.getElementById("cat").value;
		
		if(ptitle=="" || pdes=="" || burl=="" || iurl=="" || curl=="" || cat=="")
		{
			alert("One or more fields are empty");
			return false;
		}

		if(burl.match(/\.(png)$/) == null)	
		{
			alert("Image should be of type PNG");
			return false;
		}
		
		if(iurl.match(/\.(png)$/) == null)	
		{
			alert("Image should be of type PNG");
			return false;
		}
		
		if(cat=="Android_Apps" || cat=="Android_Games")
		{
			if(curl.match(/(https)\:\/\/(play)\.(google)\.(com)/) == null)				
			{	
			alert("Not a valid Play Store link!!");
			return false;
			}		
		}
		if(cat=="IOS_Apps" || cat=="IOS_Games")
		{
			if(curl.match(/(https)\:\/\/(itunes)\.(apple)\.(com)/) == null)	
			{	
			alert("Not a valid App Store link!!");
			return false;
			}
		}
		if(cat=="Music")
		{
			if(curl.match(/(https)\:\/\/(soundcloud)\.(com)/) == null)
			{	
			alert("Not a valid SoundCloud link!!");
			return false;
			}		
		}
		
		
		return true;
	}
	
	function updateHelp()
	{
		var x = document.getElementById("cat").value;
					if(x=="Android_Apps")
					{
						document.getElementById("help").innerHTML = "A Google Play Store link to your App";
					}
					else if(x=="Android_Games")
					{
						document.getElementById("help").innerHTML = "A Google Play Store link to your Game";
					}
					else if(x=="IOS_Apps")
					{
						document.getElementById("help").innerHTML = "A App Store link to your App";
					}
					else if(x=="IOS_Games")
					{
						document.getElementById("help").innerHTML = "A App Store link to your Game";
					}
					else if(x=="Website")
					{
						document.getElementById("help").innerHTML = "A Link to your Website";
					}
					else if(x=="Design")
					{
						document.getElementById("help").innerHTML = "A link to your Designs";
					}
					else if(x=="Music")
					{
						document.getElementById("help").innerHTML = "A SoundCloud link to your music";
					}
					else if(x=="Others")
					{
						document.getElementById("help").innerHTML = "A link to your Content";
					}
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
                    <img src="Stylesheets/images/utkarsh.jpg" />
                </div-->
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        <?php echo $firstname ." " .$lastname ?>
                        <b class="caret"></b>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li><a href="#">Edit Profile</a></li>
                             
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
                <li class="active">
                    <a href="submit">
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
                    <a class="navbar-brand" href="#">Submit Content</a>
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
                                <h4 class="title">Submit Content</h4>
                            </div>
                            <hr>
							<?php echo "<h4 style='color:red;'>" .$_GET['error'] ."</h4>"; ?>
                            <form  method="post" action="confirmsubmit" onsubmit="return(validate());">
                
                                <div class="content">
                                    <div class="form-group">
                                        <label>Post Title</label>
                                        <input type="text" placeholder="Post Title" class="form-control" name="ptitle" id="ptitle">
                                    </div>
                                    <div class="form-group">
                                        <label>Post Description</label>
                                        <textarea class="form-control" rows="5" cols="50" maxlength="1000" placeholder="Post Description" name="pdes" id="pdes"></textarea>
                                    </div>  
                                    <div class="form-group">
                                        <input class="form-control" type="url" placeholder="Banner Image Url" name="burl" id="burl">
                                        <h6 class="help-block" style="padding-top:10px;">Submit an Image url. Image should be of size 800 x 480</h6>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="url" placeholder="Icon Url" name="iurl" id="iurl">
                                        <h6 class="help-block" style="padding-top:10px;">Submit an Icon url. Image should be of size 75x75</h6>
                                    </div>
                                    <div class="form-group">
                                        <h4>Category</h4>
                                        <select class="form-control" name="cat" id="cat" onchange="updateHelp()">
                                            <option value="Android_Apps">Android App</option>
                                            <option value="Android_Games">Android Game</option>
                                            <option value="IOS_Apps">iOS App</option>
                                            <option value="IOS_Games">iOS Game</option>
                                            <option value="Website">Website</option>
                                            <option value="Design">Designs/Illustration</option>
                                            <option value="Music">Music</option>
                                            <option value="Others">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="url" placeholder="Content Link" name="curl" id="curl">
                                         
                                         <h6 class="help-block" id="help" style="padding-top:10px;">Link to your Content<br>(eg.Play Store link to the app)</h6>
                                    </div>                                
                                </div>
							
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-fill btn-success btn-wd">    Submit
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
                            <a href="dashboard">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Plans & Pricing
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
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <script src="Stylesheets/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="Stylesheets/assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
    <script src="Stylesheets/assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="Stylesheets/assets/js/awesome-landing-page.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>


</html>
