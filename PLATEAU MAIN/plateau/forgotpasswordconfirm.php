<?php session_start();
		$auth = "B795A3118775BB7B47CC3B8F27A55"; 
		$email = rawurlencode($_POST["email"]);
		
		
		
$uri= "https://plateau-1179.appspot.com/_ah/api/creatorAccount/v1/ResetPasswordCreator/".$email ."/" .$auth;
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
	header("location: forgot?msg=".$rm);
	}
	else if($rc==0)
	{
	header("location: forgot?msg=".$rm);
	
	}



?>