<?php session_start(); 

if($_SESSION['uid']!=null)
{
header("location: dashboard");
}
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="Stylesheets/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Plateau-A Content Discovery platform for apps,games,music,websites and illustrations</title>
        <meta name="description" content="A content discovery and mobile marketing platform to promote indie games,apps,music,websites,illustrations and digital art">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        
        <link href="Stylesheets/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="Stylesheets/assets/css/landing-page.css" rel="stylesheet"/>
        
        
        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
       <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>        
       <link href="Stylesheets/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    </head>

    <script type="text/javascript">
    
    function checkOrientation()
    {
    
        if(window.innerHeight > window.innerWidth)
        {
            alert("Please hold the device in landscape mode for a better experience!");
        }
    
    }   
    </script>
   
    <?php
        require_once 'Mobile_Detect.php';
        $detect = new Mobile_Detect;

        if( $detect->isTablet() )
        {
            
            echo  '<script type="text/javascript">'
                , 'checkOrientation();'
                , '</script>';

 
        }
    
    
    
    ?>




    <body class="landing-page landing-page1">
        <nav class="navbar navbar-transparent navbar-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                    </button>
                    <a href="home">
                        <div class="logo-container">
                            <div >
                                <img src="Stylesheets/navlogo.png" alt="" height="45px" width="240px" style="vertical-align: middle;"/>    
                            </div>
                            
                        </div>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="example" >
                    <ul class="nav navbar-nav navbar-right">
                        <li style="padding-right:10px;">
                        <a href="login">Log In</a>
                            <!--button class="btn btn-default">
                                Log In
                            </button-->
                        </li>
                        <li>
                            <button class="btn btn-fill btn-success"><a href="signup" style="color:#FFFFFF;">
                                Sign Up</a>
                            </button>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
        <div class="wrapper">
            <div class="parallax filter-gradient gray" data-color="gray">
                <div class="parallax-background">

                    <video autoplay loop class=" hidden-xs hidden-sm" style="width:100%;">
					<source src="/Stylesheets/cover_23.mp4" type="video/mp4" />A free content discovery platform for indies to promote games,apps,music,websites,illustrations
					<source src="/Stylesheets/cover_23.webm" type="video/webm" />AA free content discovery platform for indies to promote games,apps,music,websites,illustrations
        </video>

        <video autoplay loop class=" hidden-md hidden-lg" style="height:100vh;">
                    <source src="/Stylesheets/cover_23.mp4" type="video/mp4" />A free content discovery platform for indies to promote games,apps,music,websites,illustrations
                    <source src="/Stylesheets/cover_23.webm" type="video/webm" />A free content discovery platform for indies to promote games,apps,music,websites,illustrations
        </video>
                </div>
                <div class= "container">
                    <div class="row">
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="description">
                                
                                <h1 style="font-family: 'Open Sans',sans-serif; padding-top:70px;">Content Discovery Just Got Easier</h1>
                            </div>
                            <div class="buttons" style="padding:20px;">
                                <a href="signup"><button class="btn btn-fill btn-success">
                                Sign Up Now
                                </button></a>
                               
                             </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <!--div class="homepage-hero-module">
                 <div class="video-container">
                     <div class="filter"></div>
                        
        <video autoplay loop class=" hidden-xs hidden-sm" style="width:100%;">
                    <source src="/Stylesheets/cover_23.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
                    <source src="/Stylesheets/cover_23.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>

        <video autoplay loop class=" hidden-md hidden-lg" style="height:100vh;">
                    <source src="/Stylesheets/cover_23.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
                    <source src="/Stylesheets/cover_23.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
                     
                </div>

            </div-->

            <div class="section section-demo">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="description">
                                <h1 class="header-text">What is Plateau?</h1>
                                <h2 style="font-weight:200; font-size:18px; line-height:28px; text-align: justify;">Plateau is a middle out discovery platform that provides content creators with a way to showcase their content for free.
                                It lets creators tackle the high costs of marketing apps, games, websites, music and illustrations.
                                </h2>
                                <h2 style="font-weight:200; font-size:18px; line-height:28px; text-align: justify;">We are aimed to connect the content creators and their Content Finders.
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-2 col-lg-offset-2 col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-1 hidden-xs" style="margin-top:50px;">
                            <img src="/Stylesheets/plateau-logo-content-discovery.png" alt="plateau logo, free content discovery platform" style="height:250px; width:250px;" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="section section-demo">
                <div class="container">
                    <div class="row" style="margin-bottom:0px;">
                        <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1  hidden-xs">
                            <img src="Stylesheets/how-we-differ.png" alt="how we differ, thinking outside the box" height="350px" width="220px">         
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <h1 class="header-text">How we differ?</h1>
                            <h2 style="font-weight:200; font-size:18px; line-height:28px; text-align: justify;">
                                Most Marketing Platforms use a CPC,CPI or CPM model for counting click,installs and views respectively. We came up with a new RETENTION VIEW BASED model which shows how many people are actually taking interest in your content.
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-features">
                <div class="container">
                    <h2 class="header-text text-center">Features</h4>
                    <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="card card-blue">
                                <div class="icon">
                                    <i class="fa fa-compass"></i>
                                </div>
                                <h2 style="font-weight:200; font-size:18px;">Content Discovery</h2>
                                <p>We focus on showcasing your content and connecting you the creator to your potential audience.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="card card-blue">
                                <div class="icon">
                                    <i class="fa fa-line-chart"></i>
                                </div>
                                <div class="text">
                                    <h2 style="font-weight:200; font-size:18px;">Unbiased Ranking</h2>
                                    <p>The main motto behind creating this platform was to circumvent biased ranking. Our ranking system cannot be influenced by money or just downloads. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="card card-blue">
                                <div class="icon">
                                    <i class="fa fa-bar-chart"></i>
                                </div>
                                <h2 style="font-weight:200; font-size:18px;">Analytics</h2>
                                <p>A Dashboard provided so you can always track the latest analytics on your submitted content.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
             <div class="section section-demo" style="padding-top:50px; padding-bottom:50px;">
                <div class="container">
                    <div class="row" style="margin-bottom:0px;">
                        <!--div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1  hidden-xs">
                            <img src="Stylesheets/how-we-differ.png" alt="how we differ, thinking outside the box" height="350px" width="220px">         
                        </div-->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1 class="header-text">Who are these Content Finders?</h1>
                            <h2 style="font-weight:200; font-size:22px; line-height:33px; text-align: justify;">
                                Content Discovery is a problem for both the creators and the audience, the audience/Content Finders are craving for new content. According to latest stats there is more than <strong>2,000,000 searches for fresh, new content every month.</strong> But they can't get to all of this fresh content because it is overshadowed by heavily marketed content. So our platform helps brigde that gap, creating a win-win situation for both the creators and the finders.
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section section-no-padding hidden-xs">
                <div class="parallax filter-gradient gray" data-color="gray" style="height:620px;">
                    <div class="parallax-background img-responsive">
                        <img class ="parallax-background-image" src="/Stylesheets/desk-setup-creative-space.jpg" alt="Creative Space depicting the content we accept" />
                    </div>
                    <div class="info">
                        <h1>All Digital Content is welcome! Apps, Games, Music, Websites, etc.</h1>
                       
                        <div class="buttons">
                                <a href="signup"><button class="btn btn-fill btn-success">
                                SIGN UP NOW
                                </button></a>
                                <h4 style="vertical-align:-4px; padding-left:5px;">for Free!</h4>
                             </div>
                    </div>
                </div>
            </div>
            

			<div class="section section-demo" style="background-color: #ffffff;">
                <div class="container">
                    <div class="row" style="margin-bottom:0px;">
                        <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
                            <img src="Stylesheets/plateau-store.png" alt="Mobile displaying Plateau-Store" style="position:relative; left: 0; bottom: 0; height: 500px; width: 320px;">         
                        </div>
                        <div class="col-lg-7 col-lg-offset-1 col-md-7 col-md-offset-1 col-sm-7 col-sm-offset-1 col-xs-12">
                            <div class="description text-center">
                                
                                <h1 style="font-weight:400; font-size:50px; font-family: 'Open Sans',sans-serif; padding-top:70px; color:#000000;">Promote your apps, games, websites, music and illustrations for free!</h1>
                            </div>
                            <!--img src="Stylesheets/google-play-badge.png" alt="" style="height:10px; width:300px;"/"-->
                        </div>
                    </div>
                </div>
            </div>


             <div class="section section-clients" style="background-color:#fc3a51;">
                <div class="container text-center">
                    <h3 style="font-weight:70; color:#E5E5E5;">Want to know more? Go ahead and check our FAQ section</h3> 
                    <!--h1 style="font-weight:150; text-decoration:underline;"><a href="faq.html" style="color:#FFFFFF;">Frequently Asked Questions</a></h1-->
                    <div style="padding-top:20px;"> <a href="faq"><button class="btn btn-fill btn-lg" style="background-color:#FFFFFF; color:#fc3a51; border-color:#FFFFFF; width:150px; font-weight:400;font-size:20px;">
                                FAQ
                                </button></a> </div>          
                </div>
            </div>

            
            <footer class="footer">
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
                    <div class="social-area pull-right">                
                        <!--<a class="btn btn-social btn-facebook btn-simple">
                        <i class="fa fa-facebook-square"></i>
                        </a>'
						-->
                        <a href="https://twitter.com/PlateauDiscover" class="btn btn-social btn-twitter btn-simple">
                        <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                    <div class="copyright">
                        &copy; <a href="aboutus">BrainStorm Studios</a>
                    </div>
                </div>
            </footer>
        </div>
        
    </body>
    <script src="Stylesheets/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="Stylesheets/assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
    <script src="Stylesheets/assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="Stylesheets/assets/js/awesome-landing-page.js" type="text/javascript"></script>
</html>