<?php session_start(); 

if($_SESSION['uid']==null)
{
header("location: login");
}
?>



<?php 
$auth = "B795A3118775BB7B47CC3B8F27A55"; 
		$email = $_SESSION['uid'];
		


$uri= "https://plateau-1179.appspot.com/_ah/api/creatorAccount/v1/RetrieveData/" .$email ."/" .$auth;


$context = [
  'https' => [
    'method' => 'GET'
  ]
];
$context = stream_context_create($context);
$result = file_get_contents($uri, false, $context);
$json = json_decode($result,true);

$firstname = $json["firstname"];
$lastname =$json["lastname"];
$_SESSION['fname'] = $firstname;
$_SESSION['lname'] = $lastname;

?>

<?php 
$auth = "B795A3118775BB7B47CC3B8F27A55"; 
		$email = $_SESSION['uid'];
		


$uri= "https://plateau-1179.appspot.com/_ah/api/creatorPost/v1/select_allpost/" .$email ."/" .$auth;


$context = [
  'https' => [
    'method' => 'GET'
  ]
];
$context = stream_context_create($context);
$result = file_get_contents($uri, false, $context);
$json = json_decode($result,true);

//echo $json[items][0][post_Title];





?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Plateau</title>

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
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="Stylesheets/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

	<script type="text/javascript">
	function postdata(postid)
	{
	var ajaxRequest;  // The variable that makes Ajax possible!
	
		try{
			ajaxRequest = new XMLHttpRequest();
			}
			catch (e){
   // Internet Explorer Browsers
					try{
						ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
						}catch (e) {
					try{
						ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
						}catch (e){
         // Something went wrong
					alert("Your browser broke!");
					return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('postinfo');
      ajaxDisplay.innerHTML = ajaxRequest.responseText;
   }
 }
 // Now get the value from user and pass it to
 // server script.
 
 ajaxRequest.open("GET", "postinfo?postid="+postid  
                              ,true);
 ajaxRequest.send(null);
	}
	
	
	
	function analytics(postid)
	{
		
	 
		 var ajaxRequest;  // The variable that makes Ajax possible!
	
		try{
			ajaxRequest = new XMLHttpRequest();
			}
			catch (e){
   // Internet Explorer Browsers
					try{
						ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
						}catch (e) {
					try{
						ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
						}catch (e){
         // Something went wrong
					alert("Your browser broke!");
					return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('ajax_analytics');
      ajaxDisplay.innerHTML = ajaxRequest.responseText;
   }
 }
 // Now get the value from user and pass it to
 // server script.
 
 ajaxRequest.open("GET", "analytics?postid="+postid  
                              ,true);
 ajaxRequest.send(null); 
	
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
<!--a href="https://icons8.com">Icon pack by Icons8</a-->
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
                        <?php echo $firstname ." " .$lastname ?>
                        <b class="caret"></b>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li><a href="editprofile">Edit Profile</a></li>
                             
                        </ul>
                    </div>
                </div>
            </div>

            <ul class="nav">
                
                <li class="active">
                    <a href="dashboard">
                        <i class="fa fa-tachometer"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
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
                    <a class="navbar-brand" href="#">Dashboard</a>
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
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Content Submitted</h4>
                                
                            </div>
                            <div class="content">
                                <div class="row" style="min-height:300px;">
                                    <div class="col-md-5">
                                        <div class="table-responsive">
                                            <table class="table">

										<?php

											$i=1;
                                            if($json[items][0]==null)
                                            {
                                                echo "Please submit some content!";
                                            }

                                            else
                                            {




												foreach($json[items] as $p)
												{
												echo "<tbody>";
													echo "<tr>";
                                                        echo"<td>";
                                                            echo $i++;
												
                                                        echo "</td>";
                                                        echo "<td><a href='javascript:void(0)' onclick='postdata(\"$p[postid]\");' >$p[post_Title]</a></td>";
                                                        echo "<td class='td-actions text-right'>";
                                                    echo "<a href='editcontent?pid=$p[postid]'><button type='button' rel='tooltip' title='Edit' class='btn btn-info btn-simple btn-xs'>";
                                                        echo "<i class='fa fa-edit'></i>";
                                                    echo "</button></a>";
                                                    echo "<button type='button rel='tooltip' title='Buy' class='btn btn-success btn-simple btn-xs'>";
                                                            echo "<i class='fa fa-dollar'></i>";
                                                         echo "</button>";
                                                        echo "</td>";
                                                    echo "</tr>";
                                                echo "</tbody>";
												}
                                            }
										?>
												
												<?php
												/*
												foreach($json[items] as $p)
												{
								
												echo "<tbody>";
												
												echo " <div class='head' style='padding:10px;'>";
												echo "<img src='/Stylesheets/images/test.jpg' class='img-responsive img-thumbnail'>";
												echo "<h4 style='padding:10px;'><a href='javascript:void(0)' onclick='analytics(\"$p[postid]\");' >$p[post_Title]</a><a href='editcontent?pid=$p[postid]'><span class='fa fa-edit pull-right'></span></a></h4>";
												echo "</div>";        
												echo "</div><hr>";
												}
												*/
												?>
                        
												
												
												
												
												
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-md-offset-1" id="postinfo">
                                    <!--
                                        <div class="head">
                                            <img src="../images/utkarsh.jpg" class="img-thumbnail">  
                                            <h6><a href="#" style="color:#000000; font-size:16px;">Title</a></h6>
                                            <br>
                                            <h6 style="padding-top:15px;"><a href="#" style="color:#888888; font-size:14px;">Category</a></h6>
                                        </div> 
                                        <div style="padding-top:25px;">
                                            <h5 class="title">Description</h5>
                                            <div style="height:150px; overflow:scroll; padding-top:10px;">
                                            <p style="font-size:14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                            </div>
                                            
                                    <div class="stats" style="padding-top:10px;">
                                    Submitted On :
                                    </div>
                                        </div>
                                        -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                    



                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="min-height:300px; max-height:500px;">
                            <div class="header">
                                <h4 class="title">Analytics</h4>
                               
                            </div>
                            <hr>
                            <div class="content" id="ajax_analytics">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="card azure">
                                        <div class="panel-heading" style="padding:10px;">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <img src="https://maxcdn.icons8.com/iOS7/PNG/75/Very_Basic/hand_cursor-75.png" title="Hand Cursor" width="75">
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge">26</div>
                                                    <div>CLICKS</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                            <div class="panel-footer">
                                                <div class="text-center">When someone just clicks!</div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="card orange">
                                        <div class="panel-heading" style="padding:10px;">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                   <img src="https://maxcdn.icons8.com/iOS7/PNG/75/Time_And_Date/time_span-75.png" title="Time Span" width="75">
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge">26</div>
                                                    <div>RETENTED VIEWS</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                            <div class="panel-footer">
                                                <div class="text-center">When someone shows interest!</div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="card green">
                                        <div class="panel-heading" style="padding:10px;">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <img src="https://maxcdn.icons8.com/iOS7/PNG/75/Hands/thumb_up-75.png" title="Thumb Up" width="75"/>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge">26</div>
                                                    <div>LIKES</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                            <div class="panel-footer">
                                                <div class="text-center">When someone shows love!</div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="card red">
                                        <div class="panel-heading" style="padding:10px;">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                   <img src="https://maxcdn.icons8.com/iOS7/PNG/75/Hands/thumb_down-75.png" title="Thumbs Down" width="75">
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge">26</div>
                                                    <div>DISLIKES</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                            <div class="panel-footer">
                                                <div class="text-center">Ahhh! Haters gonna hate!</div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>        
                            </div>
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
