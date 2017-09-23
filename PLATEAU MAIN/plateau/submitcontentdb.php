<?php session_start();
		$auth = "B795A3118775BB7B47CC3B8F27A55"; 
		$ptitle = rawurlencode($_POST["ptitle"]);
		$pdes = rawurlencode($_POST["pdes"]);
		$burl = rawurlencode($_POST["burl"]);
		$iurl  = rawurlencode($_POST["iurl"]); 
		$cat = rawurlencode($_POST["cat"]);
		$curl = rawurlencode($_POST["curl"]);
		$email = $_SESSION['uid'];
		
		
		
		list($bwidth, $bheight) = getimagesize($_POST["burl"]);
		
			if($bwidth!=800 && $bheight!=480)
			{
				header("location: submit?error= Banner image has incorrect dimensions!!");
			}
		
		
		list($iwidth, $iheight) = getimagesize($_POST["iurl"]);
		
			if($iwidth!=75 && $iheight!=75)
			{
				header("location: submit?error= Icon image has incorrect dimensions!!");
			}
		
		
		

$uri= "https://plateau-1179.appspot.com/_ah/api/creatorPost/v1/object/" .$email ."/" .$ptitle ."/" .$pdes ."/" .$burl ."/" .$iurl ."/" .$curl ."/" .$cat ."/" .$auth;


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
	header("location: dashboard");
	}
	else if($rc==0)
	{
	//header("location: signup?error=" .$rm);
	
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