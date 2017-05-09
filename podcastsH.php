<?php  
 session_start();
ob_start();
require("utility.php");
require_once("AfricasTalkingGateway.php");
$username = "harryshaulin";
$apiKey = "4e888176b486e1596292a628030fceb874c05f0f389c10281b740ceb20a7215c";

$pname=$_POST['pname'];
$pdesc=$_POST['pdesc'];
$ima = $_FILES['ima']['name'];
$imup=$_FILES['ima']['tmp_name'];

$path="podcasts/$ima";
move_uploaded_file($imup, $path);

$uid=$_SESSION['uid'];


//$image = chunk_split(base64_encode(file_get_contents( $imup )));


$sql="INSERT INTO podcasts (podcast_name,file,podcast_description,uploader_id) values ('$pname','$path','$pdesc','$uid')";

$result=ExecuteNonQuery ($sql);

if($result)
{
	//start of sms notification....
	$query = "SELECT mobilenumber FROM students";
		$que = ExecuteQuery($query);
		while($q = mysql_fetch_array($que)){
			$data[] = $q['mobilenumber'];
			}
			$recipients = implode(",",$data);
			//echo $recipients."<br>";
			//echo $message."<br>";
			$message = "A new podcast [".$pname."] has just been added. Visit Online-University-LMS to view other podcasts.";
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
	header("location:tviewpodcasts.php");
}
else
{
		header("location:podcasts.php");
}
?> 	