<?php  
 session_start();
ob_start();
require("utility.php"); 
require_once("AfricasTalkingGateway.php");
$username = "harryshaulin";
$apiKey = "4e888176b486e1596292a628030fceb874c05f0f389c10281b740ceb20a7215c";
//............................
$uid=$_SESSION['uid'];
$doc=$_POST['doc_name'];
$desc=$_POST['description'];
$ima = $_FILES['ima']['name'];
$imup=$_FILES['ima']['tmp_name'];

$path="files/$ima";
move_uploaded_file($imup, $path);



//$image = chunk_split(base64_encode(file_get_contents( $imup )));


$sql="INSERT INTO repository (document_name,description,added_by,file) 
values ('$doc','$desc','$uid','$path')";

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
			$message = "A new document [".$doc."] has just been added in the repository. Visit Online-University-LMS to view other documents.";
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
	header("location:view_repository.php");
}
else
{
		header("location:repository.php");
}
?> 	