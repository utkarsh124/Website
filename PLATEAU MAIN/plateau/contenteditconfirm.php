<?php session_start();
		$auth = "B795A3118775BB7B47CC3B8F27A55"; 
		$ptitle = rawurlencode($_POST["posttitle"]);
		$pdes = rawurlencode($_POST["postdesp"]);
		$burl = rawurlencode($_POST["bannerimgurl"]);
		$iurl  = rawurlencode($_POST["iconurl"]); 
		$pid = rawurlencode($_POST['pid']);
		
		
		
		
					if($array_imageinfo = @getimagesize($_POST["bannerimgurl"]))
					{
						if($array_imageinfo[0]!=800 && $array_imageinfo[1]!=480)
						{
						header("location: editcontent?error= Banner image has incorrect dimensions!!&pid=$pid");
						exit();
						}	
					}
					else
					{
						header("location: editcontent?error=Banner image not found&pid=$pid");
						exit();
					}
					
					
					if($array_iimageinfo = @getimagesize($_POST["iconurl"]))
					{
						if($array_iimageinfo[0]!=75 && $array_iimageinfo[1]!=75)
						{
						header("location: editcontent?error= Icon image has incorrect dimensions!!&pid=$pid");
						exit();
						}	
					}
					else
					{
						header("location: editcontent?error=Icon image not found&pid=$pid");
						exit();
					}

$uri = "https://plateau-1179.appspot.com/_ah/api/creatorPost/v1/UpdatePost/".$pid ."/B795A3118775BB7B47CC3B8F27A55?";


$params= "Post_Content=" .$pdes ."&Post_Icon_URL=" .$iurl ."&Post_Image_URL=".$burl  ."&Post_Title=".$ptitle;

$uri = $uri .$params;


	




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
	header("location: editcontent?error=Something went wrong! Please try again.&pid=$pid");
	
	}


?>