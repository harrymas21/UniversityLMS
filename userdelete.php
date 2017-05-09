<?php session_start();
 require("utility.php"); 
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="admin")
	{
      header('Location: index.php?err=2');
	}
 ?>
<?php
$uid = $_GET['id'];
$qry = "DELETE FROM user WHERE user_id='".$uid."'";
$result = ExecuteQuery($qry);
if($result)
{
	header ("location:manageuser.php?info='User deleted successfully.'");
	}
	else
		header ("location:manageuser.php?info='DELETE not successful.'");
?>