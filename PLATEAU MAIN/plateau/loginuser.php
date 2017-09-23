<?php 	
		session_start();
		$auth = "B795A3118775BB7B47CC3B8F27A55"; 
		$email = rawurlencode($_POST["email"]);
		$pass  = rawurlencode($_POST["pass"]); 


$uri= "https://plateau-1179.appspot.com/_ah/api/creatorAccount/v1/LoginCheck/" .$email ."/" .$pass ."/" .$auth;


$context = [
  'https' => [
    'method' => 'GET'
  ]
];
$context = stream_context_create($context);
$result = file_get_contents($uri, false, $context);
$json = json_decode($result,true);
$rc = $json[requestCode];
$rm = $json[requestMessage];
//$_REQUEST['errormessage']=$rm;

	if($rc==1)
	{
	$_SESSION['uid']= $email;
	$_SESSION['pass']= $_POST["pass"];
	header("location: dashboard");
	echo $rm;
	}
	else if($rc==0)
	{
	header("location: login?error=" .$rm);
	
	}

/*
$test= "Networking for noobs";
$description = "This a line about me!";

$encodeTitle= rawurlencode($test);
$encodeDesc = rawurlencode($description);
$uri = "https://plateau-1179.appspot.com/_ah/api/creatorPost/v1/object/gamernayan69@gmail.com/" .$encodeTitle ."/" .$encodeDesc ."/link/link/link/Android_Apps/B795A3118775BB7B47CC3B8F27A55";
echo $uri;
*/

?>
