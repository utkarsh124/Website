<?php 	
		$auth = "B795A3118775BB7B47CC3B8F27A55"; 
		$fname = rawurlencode($_POST["fname"]);
		$lname = rawurlencode($_POST["lname"]);
		$email = rawurlencode($_POST["email"]);
		$pass  = rawurlencode($_POST["pass"]); 
		$country = rawurlencode($_POST["country"]);
		$age = rawurlencode($_POST["age"]);
		$reference = rawurlencode($_POST['reference']);



$uri= "https://plateau-1179.appspot.com/_ah/api/creatorAccount/v1/create_Account/" .$fname ."/" .$lname ."/" .$email ."/" .$pass ."/" .$country ."/" .$age ."/" .$reference ."/" .$auth;


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


	if($rc==1)
	{
	header("location: login?message=" .$rm);
	}
	else if($rc==0)
	{
	header("location: signup?error=" .$rm);
	
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
