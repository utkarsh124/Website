<?php session_start();
		$auth = "B795A3118775BB7B47CC3B8F27A55"; 
		$pass = rawurlencode($_POST["pass"]);
		$currentpass = rawurlencode($_POST["currentpass"]);
		$email = $_SESSION['uid'];
		
		
		
			
		
			if($_POST["currentpass"]!=$_SESSION["pass"])
			{
				header("location: editprofile?msg= Current password didnot match");
			}
		
		
		

$uri ="https://plateau-1179.appspot.com/_ah/api/creatorAccount/v1/object/" .$email ."/" .$auth ."?Pass=" .$pass;


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
	$_SESSION["pass"]=$_POST["pass"];
	header("location: editprofile?msg=Password updated successfully!");
	}
	else if($rc==0)
	{
	header("location: editprofile?msg=Something went wrong!");
	
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