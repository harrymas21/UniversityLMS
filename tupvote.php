<?php 
session_start();
require("utility.php");
$id=$_GET['id'];
$uid = $_SESSION['uid'];
//.................

$result=ExecuteNonQuery("UPDATE repository SET upvote = upvote+1 WHERE rep_id ='$id'");
if ($result)
{
	header("location:tview_repository.php");
}
?>