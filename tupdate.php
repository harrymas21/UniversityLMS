<?php session_start();
require("utility.php");
?>

<?php 
	 $sql = "UPDATE topic  SET  topic_name = '".$_POST['tn']."', topic_type = '".$_POST['tt']."'  WHERE topic_id ='".$_POST['id']."'";
	 
	 
$result=ExecuteNonQuery($sql);

if($result == 1)
{
	header("location:atopic.php");
	
	}
	else
	{
	header("location:tedit.php");
	}
?>	  