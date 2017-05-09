<?php 
session_start();
require("utility.php");
$uid = $_SESSION['uid'];
$id=$_GET['id'];
//..................
$sql2="select forum_block from students where user_id='$id'";
$rows=ExecuteNonQuery($sql2);
$row=mysql_fetch_array($rows);
$fblock=$row['forum_block'];
if ($fblock==0){
//...................
$block="UPDATE students SET forum_block = 1, blocked_by = 0 WHERE user_id=$id";
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
			$message = "Your block from the forum has been lifted by [".$_SESSION['sess_username']."] Online-University-LMS";
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
	header("location:unblock_notification.php");
	}
	else
	header("location:forumblock.php");
}
else
	header("location:forumblock.php");
?>