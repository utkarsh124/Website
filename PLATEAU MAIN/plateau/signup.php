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
    <link href="Stylesheets/light-bootstrap-dashboard.css" rel="stylesheet"/>
      
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="Stylesheets/demo.css" rel="stylesheet" />
    
        
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="Stylesheets/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
	
	<script type="text/javascript">
	
	function validate()
	{
		
		var fn=document.getElementById("fname").value;
		var ln=document.getElementById("lname").value;
		var email=document.getElementById("email").value;
		var pass=document.getElementById("pass").value;
		var reppass=document.getElementById("retypepass").value;
		var age=document.getElementById("age").value;
		var ref=document.getElementById("reference").value;
		var country=document.getElementById("country").value;
		var tnc=document.getElementById("tnc").checked;
		
		//alert("Worked"+fn +ln +email +pass +reppass +age +ref +country +tnc);
		//return false;
		
		
		if(fn==""||ln=="" ||email=="" ||pass=="" ||reppass=="" ||age=="" ||ref=="" ||country=="" )
		{
			alert("One or more fields are empty");
			return false;
		}
		else if(reppass!=pass)
		{
			alert("Passwords do no match");
			return false;
		}
	
		else if(tnc==false)
		{
			alert("Please accept the terms and conditions");
			return false; 
		}
		
	}
         
</script>
	
	

</head>
<body> 

<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">    
       
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
          <li> <button type="button" class="btn btn-fill btn-success navbar-btn"><a href="login" style="color:#FFFFFF;">
                                Login</a>
                            </button></li>
                            </ul>
    
 
        </div>
</nav>

<div class="wrapper wrapper-full-page">
    <?php
			$random_number = mt_rand(1,5);
			if($random_number == 1)
			{
			echo "<div class='full-page register-page gray' style='background-image:url(Stylesheets/music1.jpg); background-size:cover;'>";
			}
			else if($random_number == 2)
			{
			echo "<div class='full-page register-page gray' style='background-image:url(Stylesheets/setup_1.jpg); background-size:cover;'>";
			}
			else if($random_number == 3)
			{
			echo "<div class='full-page register-page gray' style='background-image:url(Stylesheets/music2.jpg); background-size:cover;'>";
			}
			else if($random_number == 4)
			{
			echo "<div class='full-page register-page gray' style='background-image:url(Stylesheets/music2.jpg); background-size:cover;'>";
			}
            else if($random_number == 5)
            {
            echo "<div class='full-page register-page gray' style='background-image:url(Stylesheets/desk-setup-creative-space.jpg); background-size:cover;'>";
            }
			
	?>  
        
    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container">
                <div class="row">    
                    <div class="col-md-8 col-md-offset-2">
                        <div class="header-text">
                            <!--h1 style="font-size: 36px;">PLATEAU</h1-->
                            <h2 style="font-size: 28px; padding-top:35px;">Register for free and become part of our platform today</h2>
                            <hr />
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-2">
                        <div class="media">
                            <div class="media-left" style="padding-right:27px;">
                                <div class="icon">
                                    <i class="fa fa-line-chart"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4>Unbiased Ranking</h4>
                                The main motto behind creating this platform was to circumvent biased ranking. Our ranking system cannot be influenced by money or just downloads.
                            </div>
                        </div>
                        
                        <div class="media">
                            <div class="media-left" style="padding-right:27px;">
                                <div class="icon">
                                    <i class="fa fa-bar-chart"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4>Analytics</h4>
                                A Dashboard provided so you can always track the latest analytics on your submitted content.
                            </div>
                        </div>
        
                        <div class="media">
                            <div class="media-left" style="padding-right:10px;">
                                <div class="icon">
                                    <i class="fa fa-compass"></i>
                                </div>
                            </div>
                            <div class="media-body" style="padding-left:10px;"">
                                <h4>Content Discovery</h4>
                                We focus on showcasing your content and connecting you the creator to your potential audience.
                            </div>
                        </div>
                     
                    </div>               
                    <div class="col-md-4 col-md-offset-s1">
                        <form method="POST" action="register" onsubmit="return(validate());">
                            <div class="card card-plain">
                                <div class="content">
                                    <div class="form-group">
                                        <input type="text" name="fname" id="fname" placeholder="Your First Name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="lname" id="lname" placeholder="Your Last Name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" placeholder="Enter email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="pass" id="pass" placeholder="Password" class="form-control">
                                    </div>                                    
                                    <div class="form-group">
                                        <input type="password" id="retypepass" placeholder="Password Confirmation" class="form-control">        
                                    </div>  
                                    <div class="form-group">
                                        <input class="form-control" type="number" min="10" max="80" placeholder="Age" name="age" id="age">
                                    </div> 
                                    <div class="form-group">
                                        <h5 style="color:#ffffff;">Reference Source</h5>
                            <select class="form-control" name="reference" id="reference">
                                <option value="Ads">Ads</option>
                                <option value="Developer_Friends">Developer Friends</option>
                                <option value="Other">Other</option>
                            </select>
                                    </div> 
                                    <div class="form-group">
                                        <h5 style="color:#ffffff;">Country</h5>
                            <select class="form-control" name="country" id="country">
<option value="Afghanistan">Afghanistan</option><option value="Åland Islands">Åland Islands</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote D'ivoire">Cote D'ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinea">Guinea</option><option value="Guinea-bissau">Guinea-bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option><option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Isle of Man">Isle of Man</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option><option value="Korea, Republic of">Korea, Republic of</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macao">Macao</option><option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Moldova, Republic of">Moldova, Republic of</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Taiwan, Province of China">Taiwan, Province of China</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania, United Republic of">Tanzania, United Republic of</option><option value="Thailand">Thailand</option><option value="Timor-leste">Timor-leste</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Viet Nam">Viet Nam</option><option value="Virgin Islands, British">Virgin Islands, British</option><option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="checkbox" style="color:#ffffff;">
                                            <span class="icons">
                                                <span class="first-icon fa fa-square-o"></span>
                                                <span class="second-icon fa fa-check-square-o"></span>
                                            </span>  
                                            <input type="checkbox" data-toggle="checkbox" id="tnc">I agree with the <a href="#">Terms & Conditions</a>
                                        </label>    
                                    </div>

                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-fill btn-success btn-wd">Create Account</button>
                                </div>
                            </div>    
                        </form>
                                
                    </div>                    
                </div>
            </div>
        </div>
    	
    	<footer class="footer footer-transparent">
            <div class="container">
                <p class="copyright text-center">
                    &copy; 2015 <a href="#">BrainStorm Studios</a>
                </p>
            </div>
        </footer>

    </div>                             
       
</div>


</body>
    
    <!--   Core JS Files   -->
    <script src="Stylesheets/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="Stylesheets/assets/js/jquery-ui.min.js" type="text/javascript"></script> 
    <script src="Stylesheets/assets/js/bootstrap.min.js" type="text/javascript"></script>
    
    <script src="Stylesheets/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="Stylesheets/assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
    <script src="Stylesheets/assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="Stylesheets/assets/js/awesome-landing-page.js" type="text/javascript"></script>
    
    
   
   
    <script src="Stylesheets/assets/js/bootstrap-select.js"></script>
    
    <!--  Checkbox, Radio, Switch and Tags Input Plugins -->
    <script src="Stylesheets/assets/js/bootstrap-checkbox-radio-switch.js"></script>
    
    <!--  Charts Plugin -->
    <script src="Stylesheets/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="Stylesheets/assets/js/bootstrap-notify.js"></script>

    
    
    <!-- Light Bootstrap Dashboard Core javascript and methods -->
    <script src="Stylesheets/assets/js/light-bootstrap-dashboard.js"></script>
 
    
    <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
    <script src="Stylesheets/assets/js/demo.js"></script>

    
</html>