<?php session_start();
ob_start();
require("utility.php");
?>

<?php 
$qid=$_POST['qid'];
$ata=$_POST['ata'];
$uid = $_SESSION["uid"];

$sql2="select forum_block from students where user_id='$uid'";
$rows=ExecuteNonQuery($sql2);
$row=mysql_fetch_array($rows);
$fblock=$row['forum_block'];
if ($fblock==1){
$sql="INSERT INTO answer(question_id,answer_detail,user_id) VALUES('$qid','$ata','$uid')";
$game="UPDATE students SET score = score+1 WHERE user_id=$_SESSION[uid]";
//echo $sql;
$result=ExecuteNonQuery($sql);
if($result)
{
	$result2=ExecuteNonQuery($game);
	header("location:questionview.php?qid=$qid");
	}
	else
	{
		header("location:answer.php");
		}
}
else
	{
		header("location:s_forumblock.php");
		}
?>
