<?php 
session_start();
require("utility.php")?>


<?php
$stid = $_POST['stid'];
$ta = $_POST['ta'];
$hd=$_POST['head'];
$uid = $_SESSION["uid"];

//......................
$sql2="select forum_block from students where user_id='$uid'";
$rows=ExecuteNonQuery($sql2);
$row=mysql_fetch_array($rows);
$fblock=$row['forum_block'];
//...............
if ($fblock==1){
$sql="INSERT INTO question ( `heading`,`question_detail`, `user_id`, `subtopic_id`) VALUES ( '$hd','$ta', '$uid', '$stid');";
$game="UPDATE students SET score = score+1 WHERE user_id ='$uid'";
$result=ExecuteNonquery($sql);

if ($result == 1){
$result2=ExecuteNonQuery($game);
	header ("location:questions.php?id=$stid");
}
}
else
	{
		header("location:s_forumblock.php");
		}
?>