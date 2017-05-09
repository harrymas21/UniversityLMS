<?php
 session_start();
require("utility.php")?>
<?php
 $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="teacher")
	{
      header('Location: index.php?err=2');
	}
?>
<?php
$uid = $_GET['id'];
$qry = "DELETE FROM subtopic WHERE subtopic_id='".$uid."'";
$result = ExecuteQuery($qry);
if($result)
{
	header ("location:asubtopic.php");
	}
	else
	{
		echo "Not Done";
		}

?>