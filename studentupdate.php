<?php 
session_start();
require("utility.php");
		      	 
?>

<?php 

$ima = $_FILES['ima']['name'];
$imup=$_FILES['ima']['tmp_name'];

$path="ups/$ima";
move_uploaded_file($imup, $path);

	if ($ima == "")
	{
		$sql = "UPDATE user  SET  username = '".$_POST['un']."', fullname = '".$_POST['fn']."',password='".$_POST['pwd']."',e_mail='".$_POST['e_mail']."',gender = '".$_POST['gender']."', dob = '".$_POST['dob']."',address = '".$_POST['add']."',city = '".$_POST['sta']."',country = '".$_POST['cou']."' WHERE user_id =$_SESSION[uid]";
	}
	else
	{
		$sql = "UPDATE user  SET  username = '".$_POST['un']."', fullname = '".$_POST['fn']."',password='".$_POST['pwd']."',e_mail='".$_POST['e_mail']."',gender = '".$_POST['gender']."', dob = '".$_POST['dob']."',uimg = '".$path."',address = '".$_POST['add']."',city = '".$_POST['sta']."',country = '".$_POST['cou']."' WHERE user_id =$_SESSION[uid]";
	}
	 
	 
	 
//echo $sql;	 
	 
$result=ExecuteNonQuery($sql);

if($result == 1)
{
	header("location:updatenotification.php");
	
	}
	else
	{
	header("location:studentedit.php");
	}
	
?>	  