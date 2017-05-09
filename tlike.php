<?php session_start();
require("utility.php");
mysql_connect("localhost","root","");
mysql_select_db("university_lms");
$id=$_GET['id'];
$r = $id;
$qid=$_GET['que'];
$username=$_SESSION['sess_username'];
$uid=$_SESSION['uid'];


$sql="select * from answer WHERE answer_id='$r'";
//$game="UPDATE students SET score = score+3 WHERE user_id ='$uid'";
$result=mysql_query($sql) or die('fine');
$row4 = mysql_fetch_array($result);
$m=$row4['like']+1;

$result=mysql_query("UPDATE `university_lms`.`answer` SET `like` = '$m' WHERE `answer`.`answer_id` ='$r';") or die('helo');
if ($result)
{
	header("location:tquestionview.php?qid=$qid");
	//$result2=ExecuteNonQuery($game);
}

?>