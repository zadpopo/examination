<!DOCTYPE html>
<html>
<head>
	<title>
		Logging Out
	</title>
</head>

<link rel="stylesheet" type="text/css" href="logout_textanim.css">

<body>

<div id="load">

  <div><h1>E</h1></div>
  <div><h1>Y</h1></div>
  <div><h1>B</h1></div>
</div>





<?php

session_start();

include("php/connections.php");



date_default_timezone_set ("Asia/Manila");
$date_now = date("m/d/Y");
$time_now = date("h:i a");





unset($_SESSION['id']);
session_unset();
session_destroy();

header('Refresh: 3;url=../toprank/index.php');
exit();


?>


</body>
</html>
