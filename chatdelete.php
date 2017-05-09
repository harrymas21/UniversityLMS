<?php session_start();
 require("utility.php"); 
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="teacher")
	{
      header('Location: index.php?err=2');
	}
 ?>
<?php
$chat_id = $_GET['id'];
$qry = "DELETE FROM chatmaster WHERE chat_id='".$chat_id."'";
$qry1 = "DELETE FROM chat WHERE chat_id='".$chat_id."'";
$result = ExecuteNonQuery($qry);
$result1= ExecuteNonQuery($qry1);

if($result and $result1)
{
	if ($role=="teacher"){
	header ("location:tmessages.php");
	}
	else if($role=="student"){
		header ("location:smessages.php");
		}
		else if($role=="admin"){
		header ("location:amessages.php");
		}
		else if($role=="mentor"){
		header("location:mentormsgs.php");
		}
		
}