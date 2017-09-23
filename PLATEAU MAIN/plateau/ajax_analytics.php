<?php 	
		$auth = "B795A3118775BB7B47CC3B8F27A55"; 
		$postid = $_GET['postid'];



$uri= "https://plateau-1179.appspot.com/_ah/api/creatorPost/v1/select_postanalytics/" .$postid ."/" .$auth;

$context = [
  'https' => [
    'method' => 'GET'
  ]
];
$context = stream_context_create($context);
$result = file_get_contents($uri, false, $context);
$json = json_decode($result,true);






/*		
      
*/
                            echo "<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>";
                                    echo "<div class='card azure'>";
                                        echo "<div class='panel-heading' style='padding:10px;'>";
                                            echo "<div class='row'>";
                                                echo "<div class='col-xs-3'>";
                                                    echo "<img src='https://maxcdn.icons8.com/iOS7/PNG/75/Very_Basic/hand_cursor-75.png' title='Hand Cursor' width='75'>";
                                                echo "</div>";
                                                echo "<div class='col-xs-9 text-right'>";
                                                    echo "<div class='huge'>$json[clicks]</div>";
                                                    echo "<div>CLICKS</div>";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                        echo "<a href='#'>";
                                            echo "<div class='panel-footer'>";
                                                echo "<div class='text-center'>When someone just clicks!</div>";
                                                echo "<div class='clearfix'></div>";
                                            echo "</div>";
                                        echo "</a>";
                                    echo "</div>";
                                echo "</div>";

                                echo "<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>";
                                    echo "<div class='card orange'>";
                                        echo "<div class='panel-heading' style='padding:10px;'>";
                                            echo "<div class='row'>";
                                                echo "<div class='col-xs-3'>";
                                                   echo "<img src='https://maxcdn.icons8.com/iOS7/PNG/75/Time_And_Date/time_span-75.png' title='Time Span' width='75'>";
                                                echo "</div>";
                                                echo "<div class='col-xs-9 text-right'>";
                                                    echo "<div class='huge'>$json[retended_Clicks]</div>";
                                                    echo "<div>RETENTED VIEWS</div>";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                        echo "<a href='#'>";
                                            echo "<div class='panel-footer'>";
                                                echo "<div class='text-center'>When someone shows interest!</div>";
                                                echo "<div class='clearfix'></div>";
                                            echo "</div>";
                                        echo "</a>";
                                    echo "</div>";
                                echo "</div>";

                                echo "<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>";
                                    echo "<div class='card green'>";
                                        echo "<div class='panel-heading' style='padding:10px;'>";
                                            echo "<div class='row'>";
                                                echo "<div class='col-xs-3'>";
                                                    echo "<img src='https://maxcdn.icons8.com/iOS7/PNG/75/Hands/thumb_up-75.png' title='Thumb Up' width='75'/>";
                                                echo "</div>";
                                                echo "<div class='col-xs-9 text-right'>";
                                                    echo "<div class='huge'>$json[likes]</div>";
                                                    echo "<div>LIKES</div>";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                        echo "<a href='#'>";
                                            echo "<div class='panel-footer'>";
                                                echo "<div class='text-center'>When someone shows love!</div>";
                                                echo "<div class='clearfix'></div>";
                                            echo "</div>";
                                        echo "</a>";
                                    echo "</div>";
                                echo "</div>";

                                echo "<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>";
                                    echo "<div class='card red'>";
                                        echo "<div class='panel-heading' style='padding:10px;'>";
                                            echo "<div class='row'>";
                                                echo "<div class='col-xs-3'>";
                                 echo "<img src='https://maxcdn.icons8.com/iOS7/PNG/75/Hands/thumb_down-75.png' title='Thumbs Down' width='75'>";
                                                echo "</div>";
                                                echo "<div class='col-xs-9 text-right'>";
                                                echo "<div class='huge'>$json[dislikes]</div>";
                                                echo "<div>DISLIKES</div>";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                        echo "<a href='#'>";
                                            echo "<div class='panel-footer'>";
                                                echo "<div class='text-center'>Ahhh! Haters gonna hate!</div>";
                                                echo "<div class='clearfix'></div>";
                                            echo "</div>";
                                        echo "</a>";
                                    echo "</div>";
                                echo "</div>"; 





?>