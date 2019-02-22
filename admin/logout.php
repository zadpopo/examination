<?php

session_start();

include("php/connections.php");



date_default_timezone_set ("Asia/Manila");
$date_now = date("m/d/Y");
$time_now = date("h:i a");
unset($_SESSION['id']);
session_unset();
session_destroy();
echo "Logging out ... Please Wait ...";
header('Refresh: 2;url=../index.php');
exit();


?>