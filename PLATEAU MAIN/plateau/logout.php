<?php session_start();

$_SESSION['uid']= null;
$_SESSION['fname'] = null;
$_SESSION['lname'] = null;

session_destroy();

header("location: home");


?>


