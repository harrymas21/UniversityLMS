<?php
session_start();
 ob_start();
require("utility.php");

$pushMessage=$_GET['message'];
echo ":$pushMessage";
echo "<hr>";
if ($pushMessage=="")
{
	echo "message is null";
	}
	else
	echo $pushMessage;
?>