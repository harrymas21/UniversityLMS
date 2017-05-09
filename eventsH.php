<?php  
 session_start();
 ob_start();
require("utility.php"); 
require_once("AfricasTalkingGateway.php");
$username = "harryshaulin";
$apiKey = "4e888176b486e1596292a628030fceb874c05f0f389c10281b740ceb20a7215c";

$ename=$_POST['ename'];
$date=$_POST['date'];
$type=$_POST['type'];
$venue=$_POST['venue'];
$user=$_SESSION['sess_username'];

$uid=$_SESSION['uid'];

$sql="INSERT INTO events (event_name,event_date,type,venue,added_by) values
 ('$ename','$date','$type','$venue','$uid')";

$result=ExecuteNonQuery($sql);

if($result)
{
	//start of sms notification....
	$query = "SELECT mobilenumber FROM students";
		$que = ExecuteQuery($query);
		while($q = mysql_fetch_array($que)){
			$data[] = $q['mobilenumber'];
			}
			$recipients = implode(",",$data);
			$message = " New school event [".$ename."] on [".$date."] at [".$venue."]";
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
	header("location:teacherhome.php");
	
}
else
{
		echo"Event not added to database";
}
?> 	