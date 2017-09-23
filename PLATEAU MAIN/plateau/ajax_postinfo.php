<?php 	
		$auth = "B795A3118775BB7B47CC3B8F27A55"; 
		$postid = $_GET['postid'];


$uri= "https://plateau-1179.appspot.com/_ah/api/creatorPost/v1/FetchPostbyID/" .$postid ."/" .$auth;

$context = [
  'https' => [
    'method' => 'GET'
  ]
];
$context = stream_context_create($context);
$result = file_get_contents($uri, false, $context);
$json = json_decode($result,true);

//$date=$json[post_Date];

$date = explode("T",$json[post_Date]);
//echo $date[0];



				echo"<div class='head'>";
                echo"<img src='$json[post_Thumb_URL]' class='img-thumbnail'>";  
                echo"<h6><a href='#' style='color:#000000; font-size:16px;'>$json[post_Title]</a></h6>";
                echo"<br>";
                echo"<h6 style='padding-top:15px;'><a href='#' style='color:#888888; font-size:14px;'>$json[category]</a></h6>";
                echo"</div>"; 
                echo"<div style='padding-top:25px;'>";
                echo"<h5 class='title'>$json[post_Content]</h5>";
                echo"<div style='height:150px; overflow:scroll; padding-top:10px;'>";
                echo"<p style='font-size:14px;'>$json[post_Content]";
                echo"</p>";
                echo"</div>";
                                           
                echo"<div class='stats' style='padding-top:10px;'>";
                echo"Submitted On : $date[0]";
				echo "<a href='javascript:void(0)' onclick='analytics(\"$json[postid]\");' >View Analytics</a>";
                echo"</div>";
                echo"</div>";
                                    

/*

*/






?>