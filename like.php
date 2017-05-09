<?php session_start();
require("utility.php");
mysql_connect("localhost","root","");
mysql_select_db("university_lms");
$id=$_GET['id'];
$r = $id;
$qid=$_GET['que'];
$username=$_SESSION['sess_username'];
$uid=$_SESSION['uid'];

//......................
$sql2="select forum_block from students where user_id='$uid'";
$rows=ExecuteNonQuery($sql2);
$row=mysql_fetch_array($rows);
$fblock=$row['forum_block'];
//...............
if ($fblock==1){
$sql="select * from answer WHERE answer_id='$r'";
$game="UPDATE students SET score = score+1 WHERE user_id ='$uid'";
$result=mysql_query($sql) or die('fine');
$row4 = mysql_fetch_array($result);
$m=$row4['like']+1;

$result=mysql_query("UPDATE `university_lms`.`answer` SET `like` = '$m' WHERE `answer`.`answer_id` ='$r';") or die('helo');
if ($result)
{
	header("location:questionview.php?qid=$qid");
	$result2=ExecuteNonQuery($game);
}
}
else
	{
		header("location:s_forumblock.php");
		}

?>