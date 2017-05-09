<?php session_start();
ob_start();
require("utility.php");
?>

<?php 
$qid=$_POST['qid'];
$ata=$_POST['ata'];
$uid = $_SESSION["uid"];
$sql="INSERT INTO answer(question_id,answer_detail,user_id) VALUES('$qid','$ata','$uid')";
//echo $sql;
$result=ExecuteNonQuery($sql);
if($result)
{
	header("location:tquestionview.php?qid=$qid");
	}
	else
	{
		echo "Your answer has not been posted.";
		}
?>
