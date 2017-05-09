<?php  
 session_start();
ob_start();
require("utility.php"); 
require_once("AfricasTalkingGateway.php");
$username = "harryshaulin";
$apiKey = "4e888176b486e1596292a628030fceb874c05f0f389c10281b740ceb20a7215c";
	
$mname=$_POST['mname'];
$ucode=$_POST['ucode'];
$uname=$_POST['uname'];
$cname=$_POST['cname'];
$user=$_SESSION['sess_username'];
$ima = $_FILES['ima']['name'];
$imup=$_FILES['ima']['tmp_name'];

$path="files/$ima";
move_uploaded_file($imup, $path);

$sql2="select * from user where username='$user'";
$rows=ExecuteQuery ($sql2);
$row = mysql_fetch_array($rows);
$uid=$row['user_id'];


//$image = chunk_split(base64_encode(file_get_contents( $imup )));


$sql="INSERT INTO material_uploads (material_name,unit_code,unit_name,course_name,added_by,file) values ('$mname','$ucode','$uname','$cname','$uid','$path')";

$result=ExecuteNonQuery ($sql);

if($result)
{
	//start of sms notification....
	$query = "select mobilenumber from students where course = '$cname'";
		$que = ExecuteQuery($query);
		while($q = mysql_fetch_array($que)){
			$data[] = $q['mobilenumber'];
			}
			$recipients = implode(",",$data);
			//echo $recipients."<br>";
			//echo $message."<br>";
			$message = "A new material [".$mname."] has just been added. Visit Online-University-LMS to view other handouts.";
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
	header("location:materialnotification.php");
}
else
{
		header("location:umaterial.php");
}
?> 	