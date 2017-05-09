<?php 
session_start();
require("utility.php");
require_once("AfricasTalkingGateway.php");
$username = "harryshaulin";
$apiKey = "4e888176b486e1596292a628030fceb874c05f0f389c10281b740ceb20a7215c";

$uid = $_SESSION['uid'];
$id=$_GET['id'];

$block="UPDATE students SET forum_block = 0, blocked_by =$uid WHERE user_id=$id";
$result=ExecuteNonQuery($block);
if ($result){
	//start of sms notification....
	$query = "SELECT mobilenumber FROM students WHERE user_id = '$id'";
		$que = ExecuteQuery($query);
		while($q = mysql_fetch_array($que)){
			$data[] = $q['mobilenumber'];
			}
			$recipients = implode(",",$data);
			//echo $recipients."<br>";
			//echo $message."<br>";
			$message = "You have been blocked from the forum by [".$_SESSION['sess_username']."]. Contact him/her for further assistance Online-University-LMS.";
			$gateway  = new AfricasTalkingGateway($username, $apiKey);
			try
			{
				$results = $gateway->sendMessage($recipients, $message);
				}
	 catch
		 (AfricasTalkingGatewayException $e)
		 {
			 echo "<p class='fans'>Encountered an error while sending: </p>". $e -> getMessage();
			 }
			 //end of sms notification.
	header("location:block_notification.php");
	}
	else
	header("location:forumblock.php");
?>