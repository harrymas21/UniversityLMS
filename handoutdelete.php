<?php session_start();
 require("utility.php"); 
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="teacher")
	{
      header('Location: index.php?err=2');
	}
 ?>
<?php
$uid = $_GET['id'];
$qry = "DELETE FROM material_uploads WHERE material_id='".$uid."'";
$result = ExecuteQuery($qry);
if($result)
{
	header ("location:handout.php?info=Material SUCCESSFULLY deleted!");
	}
	else
		header ("location:handout.php?info=Material FAILED to deleted!");
?>