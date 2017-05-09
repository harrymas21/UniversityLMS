<?php session_start();
		 require("utility.php");
 $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="teacher")
	{
      header('Location: index.php?err=2');
	}      	 
?>

<?php 
	 $sql = "UPDATE subtopic  SET  subtopic_name = '".$_POST['sn']."', subtopic_description = '".$_POST['sd']."',s_status='".$_POST['ss']."',topic_id='".$_POST['topic']."'  WHERE subtopic_id =".$_POST['id'];
	 
	 
$result=ExecuteNonQuery($sql);

if($result == 1)
{
	header("location:asubtopic.php");
	
	}
	else
	{
	header("location:sedit.php");
	}
?>
     	  