<?php 
session_start();
require("utility.php");
$status=$_POST['bio'];
$uid=$_SESSION['uid'];
$sql="UPDATE `university_lms`.`mentors` SET `bio` = '$status' WHERE `mentors`.`user_id` =$uid";
$result=ExecuteNonQuery ($sql);

if($result)
{
	header("location:mentor.php");
}
else
{
		header("location:mentor.php");
}  	 
?>