<?php 
session_start();
require("utility.php");
$id=$_GET['id'];
$uid = $_SESSION['uid'];

//.......................
$game="UPDATE students SET score = score+1 WHERE user_id ='$uid'";
//.................
$result=ExecuteNonQuery("UPDATE repository SET upvote = upvote+1 WHERE rep_id ='$id'");
if ($result)
{
	header("location:view_repository.php");
	$result2=ExecuteNonQuery($game);
}
?>