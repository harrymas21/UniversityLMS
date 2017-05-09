<?php session_start();
	require("utility.php"); 
 $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="teacher")
	{
      header('Location: index.php?err=2');
	}
?>

 <?php 
 $sn=$_POST['sn'];
 $sd=$_POST['sd'];
 $ss=$_POST['ss'];
 $ti=$_POST['ti'];
 
 $sql="INSERT INTO subtopic (subtopic_name,subtopic_description,s_status,topic_id) VALUES ('$sn','$sd','$ss',$ti)";

 $result= ExecuteNonQuery($sql);

 if($result==1)
	{
		header("location:asubtopic.php");	
		}
	else
	{
			header("location:sinsert.php");
			
	}
 ?>